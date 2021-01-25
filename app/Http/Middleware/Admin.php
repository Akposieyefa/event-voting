<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRoles = auth()->user()->roles->pluck('name');
        if (!$userRoles->contain('Admin')) {
            return \redirect('/');
        }
        return $next($request);
    }
}
