<?php

namespace app\Http\Controllers;


use app\Payment;
use app\Vps;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;


class DashboardController extends Controller
{
    private $digitalocean;


    public function __construct()
    {
        $adapter = new BuzzAdapter('28ef48b2a85e7db37f2dd299d70aba396e099e5f8a0fd7b927a9f910ea7cd2f6');
        $this->digitalocean = new DigitalOceanV2($adapter);
    }
    public function index(Request $request)
    {

        $user = $request->user();
        $vps = $user->vps()->whereHas('payment')->get();
        $droplet = $this->digitalocean->droplet();


        foreach ($vps as $vp)
        {

            if ($vp->status == 'new')
            {
                $vp->status = $droplet->getById($vp->droplet_id)->status;
                $vp->save();
            }

        }


//return $user_drop;



        return view('dashboard',compact('vps'));

    }

    public function addServer()
    {
        $price = number_format(20.99,2);

        return view('newbot',compact('price'));
    }

    public function paymentReview(Request $request)
    {

        $title = $request->bot_title;
        $license = $request->pt_license_tb;
        $exchange = $request->pt_exchange_se;
        $exchange_key = $request->pt_api_tb;
        $secret_key = $request->pt_secret_tb;

        $monthly_price = number_format(20.99,2);



        if ($request->ptf_cb) {
            $monthly_price = $monthly_price + 5.00 ;
            session()->put('ptf_api', $request->ptf_tb);
        } else {

            session()->forget('ptf_api');
        }
        if ($request->ptm_cb) {
            $monthly_price = $monthly_price + 5.00 ;
            session()->put('ptm_api', $request->ptm_tb);
        } else {

            session()->forget('ptm_api');
        }
        session()->put('monthly_price',$monthly_price);

        session()->put('title', $title);
        session()->put('license', $license);
        session()->put('exchange', $exchange);
        session()->put('exchange_key', $exchange_key);
        session()->put('secret_key', $secret_key);

        return view('payment_review', compact('title', 'monthly_price'));
    }

    public function botController(Request $request)
    {

        $vps = Vps::whereId($request->vps_id)->first();
        if($vps->status == "active"){
            $vps->status = "off";
            $this->digitalocean->droplet()->shutdown($vps->droplet_id);

        }
        else{
            $vps->status = "active";
            $this->digitalocean->droplet()->powerOn($vps->droplet_id);


        }
        $vps->save();
         return \Redirect::back()->with('message','Operation Successful !');
        
    }

    public function renew(Request $request)
    {
        $vps = Vps::whereId($request->vps_id)->first();
        session()->put('monthly_price_renew',$vps->monthly_price);

        return view('payment_renew', compact('vps'));

    }

    public function removeDroplet($vps_id)
    {
       $vps = Vps::whereId($vps_id)->first();
        $this->digitalocean->droplet()->delete($vps->droplet_id);
        $vps->status = 'disable';
        $vps->save();

        return \Redirect::back()->with('message','Operation Successful !');
    }




}
