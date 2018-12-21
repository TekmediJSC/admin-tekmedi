<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles) {
        // Not Logged
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Not allowed
        if (!in_array(Auth::user()->role->id, $roles)) {
            return abort(403);
        }

        return $next($request);
    }
}
