<?php
return [
    'listen_ip'   => env('LARAVELS_LISTEN_IP', '0.0.0.0'),
    'listen_port' => env('LARAVELS_LISTEN_PORT', 8022),
    'pid_file'    => env('LARAVELS_PID_FILE', storage_path('laravoole.pid')),
    'enable_gzip' => extension_loaded('zlib') && env('LARAVELS_ENABLE_GZIP', 1),
    'server'      => env('LARAVELS_SERVER', 'LaravelS'),
    'swoole'      => [
        'max_request' => env('LARAVELS_MAX_REQUEST', 2000),
        'daemonize'   => env('LARAVELS_DAEMONIZE', 1),
    ],
];