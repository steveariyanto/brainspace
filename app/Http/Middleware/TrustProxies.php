<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\Request as LumenRequest;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class TrustProxies
{
    /**
     * The headers that should be used to determine if a request is behind a proxy.
     *
     * @var ints
     */
    protected $headers = \Illuminate\Http\Request::HEADER_X_FORWARDED_FOR | 
                     \Illuminate\Http\Request::HEADER_X_FORWARDED_PROTO | 
                     \Illuminate\Http\Request::HEADER_X_FORWARDED_HOST;
}

