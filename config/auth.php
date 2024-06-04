<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        'secretaria' => [
            'driver' => 'session',
            'provider' => 'secretaria',
        ],

        'psicologo' => [
            'driver' => 'session',
            'provider' => 'psicologo',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'secretaria' => [
            'driver' => 'eloquent',
            'model' => App\Models\Secretaria::class,
        ],

        'psicologo' => [
            'driver' => 'eloquent',
            'model' => App\Models\Psicologo::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'secretaria' => [
            'provider' => 'secretaria',
            'table' => 'secretaria_password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'psicologo' => [
            'provider' => 'psicologo',
            'table' => 'psicologo_password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
