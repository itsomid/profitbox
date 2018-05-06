<?php

namespace app\Http\Controllers;

use app\Payment;
use app\User;
use app\Vps;
use Carbon\Carbon;
use charlesassets\LaravelPerfectMoney\PerfectMoney;
use DigitalOceanV2\Adapter\BuzzAdapter;

use DigitalOceanV2\DigitalOceanV2;

use GrahamCampbell\DigitalOcean\DigitalOceanManager;
use GrahamCampbell\DigitalOcean\Facades\DigitalOcean;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;


class PaymentController extends Controller
{
    public function report()
    {
//        return Payment::with(['user','vps'])->get();

        return view('payments', ['payments' => Payment::with(['user', 'vps'])->paginate(10)]);
    }

    public function create(Request $request)
    {

        if (session()->has('monthly_price_renew')){
            session()->forget('monthly_price_renew');
        }
        if (session()->has('renew_period')){
            session()->forget('renew_period');
        }
         $monthly_price = session()->get('monthly_price');

        $price = $this->priceCalculate($monthly_price,$request->period);
        session()->put('total_price',$price);

        $user = $request->user();
        $vps = new Vps();
        $vps->user_id = $user->id;
        $vps->title = session()->get('title');
        if (session()->has('ptf_api')) {
            $feeder_api = session()->get('ptf_api');
        } else {
            $feeder_api = '';
        }
        if (session()->has('ptm_api')) {
            $magic_api = session()->get('ptm_api');
        } else {
            $magic_api = '';
        }

        $vps->bot_details = [
            'license' => session()->get('license'),
            'exchange' => session()->get('exchange'),
            'ex_api' => session()->get('exchange_key'),
            'ex_secret' => session()->get('secret_key'),
            'feeder_api' => $feeder_api,
            'magic_api' => $magic_api,

        ];
        $vps->period = $request->period;
        $date = Carbon::today();
        $expire_date = $date->addMonth($request->period)->toDateString();
        $vps->expire_date = $expire_date;
        $vps->monthly_price = $monthly_price;
        $vps->price = $price;
        $vps->status = 'pending';
        $vps->save();


        $payment = new Payment();
        $zarin = new \ZarinpalC();

        $payment->user_id = $user->id;

        $last_order = $request->user()->vps()->orderBy('created_at', 'desc')->first();
        $payment->vps_id = $last_order->id;
        $payment->type = $request->payment_method;

        if ($request->payment_method == 'toman') {

            $toman = $this->tomanCalculate($price);
            $payment->amount = $toman;
            $payment->setDetails(['scheme' => 'profit']);
            $payment->save();
            return redirect()->away($zarin->createRequest($payment));

        } elseif($request->payment_method == 'bitcoin') {


            $btc = $this->bitcoinCalculate($price);
            $payment->amount = $btc;
            $payment->setDetails(['scheme' => 'profit']);
            $payment->save();

            $client = new Client();
            $api_key = env('BLOCKCHAIN_API_KEY');
            $xPub = env('BLOCKCHAIN_XPUB');


            $callback = route('bitcoin/callback', ['payment_id' => $payment->id]);

            $url = "https://api.blockchain.info/v2/receive?xpub=$xPub&callback=" . urlencode($callback) . "&key=$api_key";
            $response = $client->get($url);

            $response = json_decode($response->getBody(), true);
            return view('payresult',compact($response));

        } elseif ($request->payment_method == 'pm')
        {
            $payment->amount = $price;
            $payment->setDetails(['scheme' => 'profit']);
            $payment->save();
            return PerfectMoney::render([
                'PAYMENT_AMOUNT' => $price,
                'NOPAYMENT_URL'=>route('bank/pm/result', ['payment_id' => $payment->id]),
                'PAYMENT_URL'=>route('bank/pm/result', ['payment_id' => $payment->id])
            ]);


        }

        abort(404);
//          $bot_details = $bot->bot_details;
//            $bot_details['ex_api'] = '123j';
//            $bot->bot_details = $bot_details;


    }

    public function result(Request $request, $result, $vps_id)
    {

        $vps = Vps::find($vps_id);
        $payment = $vps->allPayment()->first();

        return view('payresult', compact('payment'));
    }


    public function tomanCalculate($price)
    {
        $toman = $price * 4580;
        return (round($toman / 1000)) * 1000;

    }

    public function bitcoinCalculate( $price)
    {

        $bitcoin = $price / 10000;
        return $bitcoin;

    }
    public function priceCalculate($monthly_price,$period)
    {
        if ($period == 3) {
            $price = ($monthly_price - 5) * 3;
        } elseif ($period == 6) {
            $price = ($monthly_price - 10) * 6;
        } elseif ($period == 12) {
            $price = ($monthly_price - 15) * 12;
        } else {
            $price = $monthly_price;
        }
        return $price;
    }

    public function paymentforRenew(Request $request)
    {
        $monthly_price = session()->get('monthly_price_renew');
        session()->put('renew_period',$request->period);
        $price = $this->priceCalculate($monthly_price,$request->period);
        $payment = new Payment();
        $zarin = new \ZarinpalC();

        $user = $request->user();
        $payment->user_id = $user->id;


        $payment->vps_id = $request->vps_id;

        $payment->type = $request->payment_method;
        if ($request->payment_method == 'toman') {
            $toman = $this->tomanCalculate($price);
            $payment->amount = $toman;
        } else {
            $payment->amount = $price;
        }
        $payment->setDetails(['scheme' => 'renew']);
        $payment->save();
        return response()->json($zarin->createRequest($payment), 200);
    }

    public function perfectMoney(Request $request, $payment_id)
    {

//         return $request->all();
        if (session()->has('total_price'))
        {
            $total_price = session()->get('total_price');
        }

         if ($request->PAYMENT_BATCH_NUM != 0)
         {
            if ($request->PAYMENT_AMOUNT == $total_price ){
                $payment = Payment::find($payment_id);
                $details = $payment->details();
                $details->reference_id = $request->PAYMENT_BATCH_NUM;
                $payment->setDetails($details);
                $adapter = new BuzzAdapter('28ef48b2a85e7db37f2dd299d70aba396e099e5f8a0fd7b927a9f910ea7cd2f6');
                $digitalocean = new DigitalOceanV2($adapter);
                $droplet = $digitalocean->droplet();
                $vps = $payment->vps;
                $new_droplet = $droplet->create("bot-" . $vps->id, 'ams3', '2gb', 33060666);
                $vps->status = 'new';
                $vps->droplet_id = $new_droplet->id;
                $vps->save();
                $payment->save();
                $payment->setPaid();
                return view('payresult', compact('payment'));
            }
         }
         else{
             $payment = Payment::find($payment_id);
             $details = $payment->details();
             $details->reference_id = $request->PAYMENT_BATCH_NUM;
             $payment->setDetails($details);
             $payment->save();
             $payment->setPaid();
             return view('payresult', compact('payment'));
         }

    }
}
