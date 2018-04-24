<?php

namespace app\Http\Controllers;

use app\Payment;
use app\User;
use app\Vps;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
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
            return response()->json($zarin->createRequest($payment), 200);

        } elseif($request->payment_method == 'bitcoin') {

            $btc = $this->bitcoinCalculate($price);
            $payment->amount = $btc;
            $client = new Client();
            $api_key = env('BLOCKCHAIN_API_KEY');
            $xPub = env('BLOCKCHAIN_XPUB');
            $payment->save();
            //route('panel/payment/create/get')
            $callback = "http://profitbox.co/callback";
            $callback = route('bitcoin/callback',['payment_id' => $payment->id]);

            $url = "https://api.blockchain.info/v2/receive?xpub=$xPub&callback=". urlencode($callback)."&key=$api_key";
            $response = $client->get($url);
            return $response->getBody();
            return $response = json_decode($response->getBody(), true);
//            curl "https://api.blockchain.info/v2/receive?xpub=xpub6BoS6diosBruGFATZr8Z22AfdL8XXMu8vozAna1ogkKQDhnAfKe2nAaYC9KPoD1dPyXNkdV9toYZDUcTtHakpQ9pVUFG1vAuVGLshE6WLE4&callback=https%3A%2F%2Fmystore.com%3Finvoice_id%3D058921123&key=ff6ee907-b52a-41c9-87e8-aaf2cddc2e73";
        }

        $payment->setDetails(['scheme' => 'profit']);
        $payment->save();
        return response()->json($zarin->createRequest($payment), 200);
//          $bot_details = $bot->bot_details;
//            $bot_details['ex_api'] = '123j';
//            $bot->bot_details = $bot_details;


    }

    public function result(Request $request, $result, $vps_id)
    {

        $vps = Vps::find($vps_id);
        $payment = $vps->allPayment()->first();

        return view("payresult", compact('payment'));
    }


    public function tomanCalculate($price)
    {
        $toman = $price * 4580;
        return (round($toman / 1000)) * 1000;

    }

    public function bitcoinCalculate($price)
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


}
