<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


Route::get('/', function () {
    return view('home');
});


Route::group(['prefix' => 'panel','middleware' => ['auth']], function (){

    Route::get('/','DashboardController@index')->name('panel');
    Route::post('/','DashboardController@botController')->name('panel/bot/controller');
    Route::get('/payment/history','PaymentController@report')->name('panel/payment/history');
    Route::get('/new','DashboardController@addServer')->name('panel/addserver');
    Route::post('/payment/review','DashboardController@paymentReview')->name('panel/payment/review');
    Route::post('/new','DashboardController@monthlyPrice')->name('panel/set/session/monthly');

    Route::post('/payment/renew','DashboardController@renew')->name('panel/renew');
    Route::post('/payment/renew/create','PaymentController@paymentforRenew')->name('panel/renew/payment');



    Route::post('/paymentcreate','PaymentController@create')->name('panel/payment/create');
    Route::get('/remove/{vps_id}','DashboardController@removeDroplet')->name('panel/remove/droplet');

    Route::get('/payment/result','PaymentController@result')->name('panel/payment/create/get');

    Route::get('payment/toman/calculate','PaymentController@tomanCalculate')->name('panel/payment/toman');
    Route::group(['prefix' => 'bank'], function() {

        Route::group(['prefix' => 'zpal'], function() {
            Route::get('/callback','ZarinPalController@callback')->name('zarinpal/callback');
            Route::get('redirect/{token}','ZarinPalController@redirectToBank');
        });
        Route::get('/redirect/{token}','\ZarinpalC@redirectToBank')->name('bank/redirect');
        Route::get('/pay/result/{result}/{vps_id}','PaymentController@result')->name('bank/result');



    });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
