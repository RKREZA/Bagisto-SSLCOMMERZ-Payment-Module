<?php

Route::group(['middleware' => ['web']], function () {


        Route::get('/redirect', 'RKREZA\SSLCommerz\Http\Controllers\SSLCommerzController@redirect')
            ->name('sslcommerz.standard.redirect');

        Route::post('/pay', 'RKREZA\SSLCommerz\Http\Controllers\SSLCommerzController@pay')
            ->name('sslcommerz.standard.pay');

        Route::post('/success', 'RKREZA\SSLCommerz\Http\Controllers\SSLCommerzController@success')
        	->name('sslcommerz.standard.success');

        Route::post('/fail', 'RKREZA\SSLCommerz\Http\Controllers\SSLCommerzController@fail')
        	->name('sslcommerz.standard.fail');

        Route::post('/cancel', 'RKREZA\SSLCommerz\Http\Controllers\SSLCommerzController@cancel')
        	->name('sslcommerz.standard.cancel');
    
});











// SSLCOMMERZ Start
// Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
// Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

// Route::post('/pay', 'SslCommerzPaymentController@index');
// Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

// Route::post('/success', 'SslCommerzPaymentController@success');
// Route::post('/fail', 'SslCommerzPaymentController@fail');
// Route::post('/cancel', 'SslCommerzPaymentController@cancel');

// Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END