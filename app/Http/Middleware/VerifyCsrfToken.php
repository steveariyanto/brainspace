<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpFoundation\Response;

class VerifyCsrfToken
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Masukkan URL yang ingin dikecualikan dari pemeriksaan CSRF di sini.
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah request memiliki token yang valid
        if ($this->shouldSkip($request)) {
            return $next($request);
        }

        // Validasi token CSRF
        if (!$this->tokensMatch($request)) {
            throw new TokenMismatchException;
        }

        return $next($request);
    }

    /**
     * Determine if the request should be skipped for CSRF validation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldSkip(Request $request): bool
    {
        // Skip CSRF jika metode request adalah 'GET', 'HEAD', 'OPTIONS'
        // atau jika sudah ada pengecualian yang ditentukan
        return in_array($request->method(), ['GET', 'HEAD', 'OPTIONS']) ||
               $this->isReading($request) ||
               $this->shouldPassThrough($request);
    }

    /**
     * Determine if the request is a "read" request (e.g., GET, HEAD).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function isReading(Request $request): bool
    {
        return in_array($request->method(), ['GET', 'HEAD']);
    }

    /**
     * Determine if the request should pass through CSRF validation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldPassThrough(Request $request): bool
    {
        // Add URLs to the except array to skip CSRF validation
        return in_array($request->path(), $this->except);
    }

    /**
     * Determine if the CSRF token in the request matches the session token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function tokensMatch(Request $request): bool
    {
        return $request->session()->token() === $request->input('_token');
    }
}
