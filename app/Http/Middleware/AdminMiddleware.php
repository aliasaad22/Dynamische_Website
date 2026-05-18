<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Controleer of gebruiker admin is
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Geen toegang');
        }

        return $next($request);
    }
}