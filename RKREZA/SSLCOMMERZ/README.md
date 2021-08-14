# Bagisto SSLCOMMERZ Payment Module
 Version 1.0

### Requirements

* **Bagisto**: 1.1 or Higher

### Installation and Configuration

##### a. Download & Extract the contents of zip

##### b. Create folder "RKREZA" inside "packages" folder & copy the "SSLCOMMERZ" folder inside it

##### c. Go to config\app.php & add "RKREZA\SSLCOMMERZ\Providers\SSLCOMMERZServiceProvider::class" (without double quotation) inside 'providers'

##### e. Go to composer.json & add "RKREZA\\SSLCOMMERZ\\": "packages/RKREZA/SSLCOMMERZ/src" inside 'autoload' -> 'psr-4'

##### f. Run the following command
		~~~
		composer dump-autoload
		php artisan config:cache
		php artisan view:cache
		php artisan route:cache
		~~~

##### g. Now, you are good to go.
