<?php 

namespace RKREZA\SSLCOMMERZ\Providers;

 use Illuminate\Support\ServiceProvider;
 use Illuminate\Support\Facades\Event;

 
 class SSLCOMMERZServiceProvider extends ServiceProvider
 {
     /**
     * Bootstrap services.
     *
     * @return void
     */
     public function boot()
     {
          include __DIR__ . '/../Http/routes.php';
          $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'sslcommerz_view');
          $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'sslcommerz_lang');
     }

     /**
     * Register services.
     *
     * @return void
     */
     public function register()
     {
          $this->mergeConfigFrom(dirname(__DIR__) . '/../Config/paymentmethods.php', 'paymentmethods');
          $this->mergeConfigFrom(dirname(__DIR__) . '/../Config/system.php', 'core');
     }
 }