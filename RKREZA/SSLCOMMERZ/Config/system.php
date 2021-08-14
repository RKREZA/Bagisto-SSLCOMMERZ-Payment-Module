<?php

return [
    [
        'key'    => 'sales.paymentmethods.sslcommerz',
        'name'   => 'sslcommerz_lang::app.admin.system.sslcommerz',
        'sort'   => 4,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'admin::app.admin.system.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.admin.system.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ],  [
                'name'          => 'store_id',
                'title'         => 'Store ID',
                'type'          => 'select',
                'type'          => 'text',
                'validation'    => 'required',
            ],[
                'name'          => 'store_passwd',
                'title'         => 'Store Password',
                'type'          => 'select',
                'type'          => 'text',
                'validation'    => 'required',
            ], [
                'name'          => 'active',
                'title'         => 'admin::app.admin.system.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true
            ], 

            [
                'name'          => 'apiDomain',
                'title'         => 'API URL',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ], 

            [
                'name'          => 'connect_from_localhost',
                'title'         => 'Connect From Localhost',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ], 

            [
                'name'    => 'sort',
                'title'   => 'admin::app.admin.system.sort_order',
                'type'    => 'select',
                'options' => [
                    [
                        'title' => '1',
                        'value' => 1,
                    ], [
                        'title' => '2',
                        'value' => 2,
                    ], [
                        'title' => '3',
                        'value' => 3,
                    ], [
                        'title' => '4',
                        'value' => 4,
                    ],
                ],
            ]
        ]
    ]
];