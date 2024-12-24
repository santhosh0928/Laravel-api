<?php


    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    return [
        'paths' => ['api/*'], // Allow API routes
        'allowed_methods' => ['*'], // Allow all HTTP methods
        'allowed_origins' => ['http://localhost:19000', 'http://192.168.0.118:19000'], // Replace <YOUR_IP> with your local IP
        'allowed_origins_patterns' => [],
        'allowed_headers' => ['*'], // Allow all headers
        'exposed_headers' => [],
        'max_age' => 0,
        'supports_credentials' => false,
    ];
    