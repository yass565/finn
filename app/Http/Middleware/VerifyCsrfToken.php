<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://localhost:8000/categories',
        'http://localhost:8000/categories/*',
        'http://localhost:8000/subcategories',
        'http://localhost:8000/subcategories/*',
        'http://localhost:8000/bigcities',
        'http://localhost:8000/bigcities/*',
        'http://localhost:8000/cities',
        'http://localhost:8000/cities/*',
        'http://localhost:8000/ads',
        'http://localhost:8000/ads/*',
        'http://localhost:8000/adsimages',
        'http://localhost:8000/adsimages/*',
        'http://localhost:8000/images',
        'http://localhost:8000/images/*',

    ];
}
