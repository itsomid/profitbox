<?php

namespace app\Http\Controllers;


use app\Payment;
use app\Vps;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;


class DashboardController extends Controller
{
    public function index(Request $request)
    {


          $vps = Vps::with('payment')->whereHas('payment')->get();

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
            $vps->status = "disable";
        }
        else{
            $vps->status = "active";
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



}
