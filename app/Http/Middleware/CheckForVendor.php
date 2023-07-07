<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckForVendor
{

    public function handle(Request $request, Closure $next): Response
    {

        if ($request->user()->isVendor()) {
            return $next($request);
        }
        return redirect('/admin');
    }
}
