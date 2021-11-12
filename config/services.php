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
        'client_id' => '1028247174626585',
        'client_secret' => '8cc98b7b009c84a2ed7ac0f4c9ec9bcf',
        'redirect' => 'http://shopfashion.test/admin/login/callback'
    ],

    'google' => [
        'client_id' => '222855328049-orc8ar64e9dj7mvdin7vkb8aqnt2co5e.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost/fashion/admin/login/google/callback'
    ],


];
