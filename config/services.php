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

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => Learncloud\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    
    'facebook' => [
    'client_id' => '552495898269767',
    'client_secret' => 'f6209043eeb70e54e34d41da479f2a97',
    'redirect' => 'http://1fbfd985.ngrok.io/auth/facebook/callback',
    ],


    'twitter' => [
    'client_id' => 'mT0o2Z6n9WjXNwWqQFkdQiZ2i',
    'client_secret' => '8CmMQQ4O078Bqb8QW25sNQx2JjV6ey6qgyQ06aI108afGcOmsL',
    'redirect' => ' http://1fbfd985.ngrok.io/auth/twitter/callback',
    ],

/*http://stackoverflow.com/questions/32773364/socialite-auth-how-do-i-include-more-than-one-redirect-uri-for-each-service
*/

];
