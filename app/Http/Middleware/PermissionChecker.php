<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PermissionChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        foreach (Auth::user()->role->permissions as $key => $permission) {
            if (request()->path() == $permission->url_path) {
                // dd(request()->path());
                return $next($request);
            }
        }

        return redirect()->route('unauthorized');
    }
}
