<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // 1. check of user ingelogd is
        if (!auth()->check()) {
            return redirect('/login');
        }

        // 2. check of user admin is
        if (!auth()->user()->is_admin) {
            abort(403, 'Geen toegang');
        }

        // 3. laat request door
        return $next($request);
    }
}