<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoadEnvironmentVariables
{
    public function handle(Request $request, Closure $next)
    {
        // Menambahkan logika untuk memuat environment variables
        return $next($request);
    }
}
