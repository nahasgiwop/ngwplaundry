<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'auth'     => \App\Filters\Auth::class, // Tambahkan alias ini
    ];

    public $globals = [
        'before' => [
            // Tambahkan filter global jika perlu
        ],
        'after' => [
            'toolbar',
        ],
    ];

    public $methods = [];
    public $filters = [];
}
