<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'notifications/markread',
        'lead/import',
        'leads/updateassign/{external_id}',
        'leads/updatestatus/{external_id}',
      
    ];
}
