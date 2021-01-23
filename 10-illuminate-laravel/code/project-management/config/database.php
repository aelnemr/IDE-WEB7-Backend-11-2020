<?php
return [
    'connection' => [
        "driver" => env('DB_DRIVER', 'mysql'),
        "host" => env('DB_HOST', 'mysql'),
        "database" => env('DB_NAME', 'pm'),
        "username" => env('DB_USERNAME', 'root'),
        "password" => env('DB_PASSWORD', 'root')
    ]
];