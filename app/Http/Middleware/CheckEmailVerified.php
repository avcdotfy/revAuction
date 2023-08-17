<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::user()->email_verified_at);
        if (Auth::user()->email_verified_at instanceof Carbon) {
            return $next($request);
        } else {
            Auth::logout();
            return redirect()->back()->with('error', 'Your Email is not verified, please verify your email address');
        }
    }
}
