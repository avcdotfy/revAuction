<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckForAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->isAdminOrEmployee()) {

            if (Auth::user()->user_type == 'EMPLOYEE') {
                if (!Auth::user()->employee->is_active) {
                    Auth::logout();
                    return redirect()->back()->withErrors('Account has been disabled , please contact the administrator');
                } else {
                    return $next($request);
                }
            }
            return $next($request);
        }

        return redirect()->route('vendor.dashboard');
    }
}
