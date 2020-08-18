<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => env('1158985064444131'),
        'client_secret' => env('8816adfdb81be4ee09a9c6d98aa0e309'),
        'redirect' => env('http://localhost:8000/login/facebook/callback'),
        'scopes' => ['email', 'public_profile'],
    ],'google' => [
        'client_id' => env('65662099708-09sk20t2uv68jd0dcrloqp27thd5meee.apps.googleusercontent.com'),
        'client_secret' => env('oUEqXcZbQ9N7Y9QjSYKuSDji'),
        'redirect' => env('http://localhost:8000/login/google/callback'),
        'scopes' => [
            'https://www.googleapis.com/auth/userinfo.email',
            'https://www.googleapis.com/auth/userinfo.profile',
            'openid',
        ],
    ],'linkedin' => [
        'client_id' => env('7713mxonbu6gtl'),
        'client_secret' => env('xVDJVmwHo3uZ7S6M'),
        'redirect' => env('http://localhost:8000/login/linkedin/callback'),
        'scopes' => ['r_emailaddress', 'r_liteprofile'],
    ],

    'twitter' => [
        'client_id' => env('JsXRdgDk59WSpTADVMJrCNSu3'),
        'client_secret' => env('jiDhiOXzdZ9UfW4ApQJAJjFuJSaxOSw7AI4I7ySmDLbspfiHBY'),
        'redirect' => env('http://localhost:8000/login/twitter/callback'),
        'scopes' => [],
    ],
];
