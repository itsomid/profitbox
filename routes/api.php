<?php

use Illuminate\Http\Request;
use app\Payment;
use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('bitcoin/callback/{payment_id}',function($payment_id, Request $request) {
     $transaction_hash = $request->input('transaction_hash');
     $address = $request->input('address');
     $confirmations = $request->input('confirmations');
     $value = $request->input('value');
     // VALUE IS IMPORTANT
    if($value == '0.005' && $confirmations >= 2) {

        $payment = Payment::find($payment_id);
        $details = $payment->details();
        $details->reference_id = $transaction_hash;
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

    }
})->name('bitcoin/callback');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

