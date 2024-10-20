<?php

use Kevupton\LaravelCoinpayments\Models\Log;

return array(

    // prefix to each of the tables in the database
    // set the prefix in the env file as COINPAYMENTS_DB_PREFIX - not here as it doesn't work - not sure why
    'database_prefix' => env('COINPAYMENTS_DB_PREFIX', ''),

    'merchant_id' => env('COINPAYMENTS_MERCHANT_ID'),

    // Your API public key associated with your coinpayments account
    'public_key' => env('COINPAYMENTS_PUBLIC_KEY'),

    // Your API private key associated with your coinpayments account
    'private_key' => env('COINPAYMENTS_PRIVATE_KEY'),

    // This is used to verify that an IPN is from us, use a good random string nobody can guess.
    'ipn_secret' => env('COINPAYMENTS_IPN_SECRET'),

    // URL for your IPN callbacks. If not set it will use the IPN URL in your Edit Settings page if you have one set.
    'ipn_url' => env('COINPAYMENTS_IPN_URL'),

    // The format of response to return, json or xml. (default: json)
    'format' => env('COINPAYMENTS_API_FORMAT', 'json'),

    // ALL logs all requests, ERROR logs only errors, and NONE never
    'log_level' => Log::LEVEL_ERROR,

    // Whether or not to have coinpayments automatically parse IPN's for you. If so please specify a PATH
    'route'           => [
        'enabled' => env('COINPAYMENTS_IPN_ROUTE_ENABLED', false),
        'path'    => env('COINPAYMENTS_IPN_ROUTE_PATH', '/api/ipn'),
    ],
);
