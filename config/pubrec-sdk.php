<?php

// config for ChrisReedIO/PubRecSDK
return [
    'api_key' => env('PUBREC_API_KEY'),
    'api_url' => env('PUBREC_API_URL', 'https://api.propmix.io'),
    'cache' => [
        // The default cache driver to use
        // Set to null to disable caching
        'driver' => 'redis',
        // How long to cache the response for (in seconds)
        'ttl' => env('PUBREC_CACHE_TTL', 60 * 60 * 24 * 7),
    ],
];
