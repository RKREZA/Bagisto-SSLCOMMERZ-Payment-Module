<?php

namespace RKREZA\SSLCOMMERZ\Http\Controllers;

use Webkul\Checkout\Facades\Cart;
use Webkul\Sales\Repositories\OrderRepository;
use Illuminate\Support\Facades\Config;
use RKREZA\SSLCOMMERZ\Payment\Standard;
use RKREZA\SSLCOMMERZ\Library\sslcommerz\SslCommerzNotification;

class SSLCOMMERZController extends Controller
{
    
    protected $orderRepository;
    protected $standard;
    protected $config;
    
    public function __construct(OrderRepository $orderRepository, Standard $standard, Config $config)
    {
        $this->orderRepository  = $orderRepository;
        $this->standard         = $standard;
        $this->config           = $config;
    }

    public function redirect()
    {
        return view('sslcommerz_view::standard-redirect');
    }



    public function pay()
    {

        $sslc = new SslCommerzNotification();
        $payment_options = $sslc->makePayment($this->standard->getFormFields(), 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
       

    }

    /**
     * Cancel payment from sslcommerz.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        session()->flash('error', 'SSLCommerz payment has been canceled.');
        return redirect()->route('shop.checkout.cart.index');
    }

    /**
     * Cancel payment from sslcommerz.
     *
     * @return \Illuminate\Http\Response
     */
    public function failed()
    {
        session()->flash('error', 'SSLCommerz payment failed.');
        return redirect()->route('shop.checkout.cart.index');
    }

    /**
     * Success payment
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        $order = $this->orderRepository->create(Cart::prepareDataForOrder());
        Cart::deActivateCart();
        session()->flash('order', $order);
        return redirect()->route('shop.checkout.success');
    }




}