<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'ga' => [
        'tracking_id' => env('GA_TRACKING_ID', ''),
    ],

    'disqus' => [
        'short_name' => env('DISQUS_SHORT_NAME'),
        'secret_key' => env('DISQUS_SECRET_KEY'),
        'public_key' => env('DISQUS_PUBLIC_KEY'),
    ],

    'passport' => [
        'path' => env('PASSPORT_KEY_PATH'),
    ],

    'sentry' => [
        'public_dsn' => env('APP_SENTRY_PUBLIC', ''),
    ],
];