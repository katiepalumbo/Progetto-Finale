<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Braintree_Configuration;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // braintree setup
            $environment = env('BRAINTREE_ENV');
            $braintree = new \Braintree\Gateway([
            'environment' => $environment,
            'merchantId' => 'merchant_id_example',
            'publicKey' => 'public_key_example',
            'privateKey' => 'private_key_example'
    ]);
    config(['braintree' => $braintree]); 

        //  $gateway = new \Braintree\Gateway([
        //      'environment' => 'sandbox',
        //  'merchantId' => 'use_your_merchant_id',
        //      'publicKey' => 'use_your_public_key',
        //      'privateKey' => 'use_your_private_key'
        // ]);

        //  \Braintree_Configuration::environment(env('BRAINTREE_ENV'));
        //  \Braintree_Configuration::environment(env('BRAINTREE_ENV'));
        //  \Braintree_Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
        //  \Braintree_Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
        //  \Braintree_Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));
    }
}
