<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (auth()->check()) {
            $role = auth()->user()->role;
    
            if ($role === 'admin') {
                return $next($request);
            }
        }
    
        abort(403, 'Your are not allowed to access this page');
    }
}
