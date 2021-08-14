<?php

Route::group(['middleware' => ['web']], function () {

        Route::get('/redirect', 'Custom\SSLCommerz\Http\Controllers\SSLCommerzController@redirect')
            ->name('sslcommerz.standard.redirect');

        Route::post('/pay', 'Custom\SSLCommerz\Http\Controllers\SSLCommerzController@pay')
            ->name('sslcommerz.standard.pay');

        Route::post('/success', 'Custom\SSLCommerz\Http\Controllers\SSLCommerzController@success')
        	->name('sslcommerz.standard.success');

        Route::post('/fail', 'Custom\SSLCommerz\Http\Controllers\SSLCommerzController@fail')
        	->name('sslcommerz.standard.fail');

        Route::post('/cancel', 'Custom\SSLCommerz\Http\Controllers\SSLCommerzController@cancel')
        	->name('sslcommerz.standard.cancel');
    
});