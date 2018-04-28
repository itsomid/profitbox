<?php

namespace app\Http\Controllers;

use app\Classes\Abstracts\AbstractIPG;
use app\Payment;
use app\User;
use app\Vps;
use Illuminate\Http\Request;
use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;


class ZarinPalController extends Controller implements AbstractIPG
{
    public $fake = true;

    public function createRequest($payment)
    {
        $result = \Zarinpal::request(route('zarinpal/callback'), $payment->amount, 'testing');
        $payment->authority = $result['Authority'];
        $payment->save();
        return ['redirect_url' => 'https://www.zarinpal.com/pg/StartPay/' . $result['Authority'] . '/ZarinGate'];
    }

    public function redirectToBank($token)
    {
        return view('payments.saman.redirect', ['token' => $token]);
    }

    public function callback(Request $request)
    {

        \Log::debug("payment callback: " . json_encode($request->all()));
        $authority = $request->input('Authority');
        $status = $request->input('Status');
        $payment = Payment::where('authority', $authority)->firstOrFail();

        // temporary


        $failed = route('bank/result', ['result' => 0, 'vps_id' => $payment->vps->id]);
        $success = route('bank/result', ['result' => 1, 'vps_id' => $payment->vps->id]);


//        if(isset($payment->details()->external) && $payment->details()->external)
//        {
//            $failed = $payment->details()->scheme."://buyfailed";
//            $success = $payment->details()->scheme."://buysuccessful";
//            //$failed = $success;
//        }else {
//
//        }
        if ($this->fake) {
            if (session()->has('monthly_price_renew') && session()->has('renew_period')) {
                $vps = Vps::whereId($payment->vps->id)->first();
                $renew_period = session()->get('renew_period');
                $expire_date = $vps->expire_date;
                $expire_date = $expire_date->addMonth($renew_period)->toDateString();
                $vps->expire_date = $expire_date;
                $vps->period = $vps->period + $renew_period;
                $vps->save();
            }
            $details = $payment->details();
            $details->reference_id = 'fake-' . rand(1000, 2000);
            $payment->setDetails($details);
            $payment->save();
            $payment->setPaid();

            ///vps
            $adapter = new BuzzAdapter('28ef48b2a85e7db37f2dd299d70aba396e099e5f8a0fd7b927a9f910ea7cd2f6');
            $digitalocean = new DigitalOceanV2($adapter);
//
            $droplet = $digitalocean->droplet();
            $vps = $payment->vps;

            $new_droplet = $droplet->create("bot-" . $vps->id, 'ams3', '2gb', 33060666);
            $vps->status = 'new';
            $vps->droplet_id = $new_droplet->id;
            $vps->save();


            return redirect($success);

        }
        if ($status == "NOK") {
            $payment->status = 'failed';
            $payment->save();
            return redirect($failed);
        }
        // seems to be ok
        $result = \Zarinpal::verify('OK', $payment->amount, $authority);
        \Log::debug("payment callback verify result: " . json_encode($result));
        if ($result['Status'] == "success") {
            $details = $payment->details();
            $details['reference_id'] = $result["RefID"];
            $payment->setDetails($details);
            $payment->save();
            $payment->setPaid();
            return redirect($success);
        }
        return redirect($failed);

    }

    public function getStatus($payment_id)
    {
        return "yeah :) $payment_id";
    }

}
