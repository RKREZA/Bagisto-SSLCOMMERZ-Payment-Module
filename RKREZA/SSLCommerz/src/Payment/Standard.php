<?php

namespace RKREZA\SSLCommerz\Payment;

use Illuminate\Support\Facades\Config;
use Webkul\Payment\Payment\Payment;
use Webkul\Category\Repositories\CategoryRepository as Category;

class Standard extends Payment
{
   
    protected $code  = 'sslcommerz';
    protected $category;


    
    public function __construct(Category $category)
    {
        $this->category         = $category;
    }




    public function getRedirectUrl()
    {
        return route('sslcommerz.standard.redirect');
    }


    public function getFormFields()
    {
        $cart = $this->getCart();


        foreach ($cart->items as $value) {
            $product_name   = $value['name'];
            $product_id     = $value['product_id'];
        }

        $category = $this->category->getVisibleCategoryTree($product_id);


        $fields = [
            'store_id'                      => $this->getConfigData('store_id'),
            'store_passwd'                  => $this->getConfigData('store_passwd'),
            'apiDomain'                     => $this->getConfigData('apiDomain'),

            'total_amount'                  => $cart->grand_total,
            'currency'                      => $cart->cart_currency_code,
            'tran_id'                       => rand(100,1000).$cart->id.time(),
            'success_url'                   => route('sslcommerz.standard.success'),
            'fail_url'                      => route('sslcommerz.standard.fail'),
            'cancel_url'                    => route('sslcommerz.standard.cancel'),
            'emi_option'                    => 0,

            'cus_name'                      => $cart->billing_address->first_name.$cart->billing_address->last_name,
            'cus_email'                     => $cart->billing_address->email,
            'cus_add1'                      => $cart->billing_address->address1,
            'cus_city'                      => $cart->billing_address->city,
            'cus_state'                     => $cart->billing_address->state,
            'cus_postcode'                  => $cart->billing_address->postcode,
            'cus_country'                   => $cart->billing_address->country,
            'cus_phone'                     => $cart->billing_address->phone,

            'charset'                       => 'utf-8',

            'shipping_method'               => 'Yes',
            'num_of_item'                   => $cart->items_count,

            'product_name'                  => $product_name,
            'product_category'              => $category,
            'product_profile'               => 'general',


        ];

        return $fields;
    }


 
}