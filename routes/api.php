<?php

use Illuminate\Http\Request;

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
    if($value = '0.005' && $confirmations == 2) {

        $payment = \app\Payment::find($payment_id);
        $payment->status = "successful";
        $payment->save();
    }

})->name('bitcoin/callback');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

