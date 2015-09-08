<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    // config facebook app
    'facebook' => [
            'client_id' => '201536826668676',
            'client_secret' => '8dbb657ce57e07b525b6bc807b1b1ea4',
            'redirect' => 'http://basic.app/socialite/facebook/callback/',
    ],

    // config google app
    'google' => [
            'client_id' => '351970641871-sud2odlpp0opo9e2vbqcmocd76l5n66v.apps.googleusercontent.com',
            'client_secret' => 'TtvUiK-avfqUB02nesGR6mfQ',
            'redirect' => 'http://basic.app/socialite/google/callback/',
    ],

    // config twitter app
    'twitter' => [
            'client_id' => 'x7Sy1czae4iMSkOKD0AcZL59z',
            'client_secret' => 'Cxqr34x02KjTopl3gVXHfOLB12sUUhoyfk5NrrQLjlUKU14Y7e',
            'redirect' => 'http://basic.app/socialite/twitter/callback/',
    ],

    // config linkedin app
    'linkedin' => [
            'client_id' => '751yp20iu5nlha',
            'client_secret' => 'eIyjv9CemHYQsJd7',
            'redirect' => 'http://basic.app/socialite/linkedin/callback/',
    ],

];
