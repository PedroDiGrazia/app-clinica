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
<<<<<<< Updated upstream
=======

        'psicologo' => [
            'driver' => 'session',
            'provider' => 'psicologo',
        ],
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
    ],

=======

        'psicologo' => [
            'driver' => 'eloquent',
            'model' => App\Models\Psicologo::class,
        ],
    ],

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======

        'psicologo' => [
            'provider' => 'psicologo',
            'table' => 'psicologo_password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
>>>>>>> Stashed changes
    ],

    'password_timeout' => 10800,

];
