<?php

return [
    'enable' => env('DKIM_ENABLE', false),
    'domain' => env('DKIM_DOMAIN'),
    'selector' => env('DKIM_SELECTOR', 'default'),
    'private_key' => env('DKIM_PRIVATE_KEY'),
    'passphrase'=> env('DKIM_PASSPHRASE', ''),
    'algorithm' => env('DKIM_ALGORITHM', 'rsa-sha256'),
    'identity'  => env('DKIM_IDENTITY', null),
];
