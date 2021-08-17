<?php
return [
    'sslcommerz'   => [
        'code'                      => 'sslcommerz',
        'title'                     => 'SSLCommerz',
        'description'               => 'SSLCommerz Description',
        'class'                     => 'RKREZA\SSLCommerz\Payment\Standard',
        'sandbox'                   => false,
        'active'                    => true,
        'store_id'                  => 'demo_id',
        'store_passwd'              => 'demo_password',
        'sort'                      => 4,
        'connect_from_localhost'    => false,
        'is_direct_pay_enable'      => true,




        'apiCredentials' => [
            'store_id'              => 'demo_id',
            'store_password'        => 'demo_password',
        ],

        'apiDomain'                 => 'https://securepay.sslcommerz.com',
        
        'apiUrl' => [
            'make_payment'          => "/gwprocess/v4/api.php",
            'transaction_status'    => "/validator/api/merchantTransIDvalidationAPI.php",
            'order_validate'        => "/validator/api/validationserverAPI.php",
            'refund_payment'        => "/validator/api/merchantTransIDvalidationAPI.php",
            'refund_status'         => "/validator/api/merchantTransIDvalidationAPI.php",
        ],

        'success_url'               => '/success',
        'failed_url'                => '/fail',
        'cancel_url'                => '/cancel',
        'ipn_url'                   => '/ipn',
    ],


];