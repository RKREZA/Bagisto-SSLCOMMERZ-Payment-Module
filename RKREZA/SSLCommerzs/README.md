# Bagisto SSLCommerz Payment Module
Version 1.0

### Requirements

* **Bagisto**: 1.1 or Higher

### Installation and Configuration

##### a. Download & Extract the contents of zip

##### b. Create folder "RKREZA" inside "packages" folder & copy the "SSLCommerz" folder inside it

##### c. Go to config\app.php & add "RKREZA\SSLCommerz\Providers\SSLCommerzServiceProvider::class" (without double quotation) inside 'providers'

##### d. Go to composer.json & add "RKREZA\\SSLCommerz\\": "packages/RKREZA/SSLCommerz/src" inside 'autoload' -> 'psr-4'

##### e. add these following to app\Http\Middleware\VerifyCsrfToken.php
			
			protected $except = [
		        'paypal/standard/ipn', '/pay-via-ajax', '/success','/cancel','/fail','/ipn'
		    ];

##### f. Run the following command
		~~~
		composer dump-autoload
		php artisan config:cache
		php artisan view:cache
		php artisan route:cache
		~~~

##### g. Now, you are good to go.

##### Note : Your amount must be atlest BDT 10 , otherwise SSLCommerz will not accept the payment.
