<?php

namespace App\Http\Middleware;

use App\Helpers\PermissionHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class PermissionChecker
{
    public function handle(Request $request, Closure $next): Response
    {

        if (PermissionHelper::hasPermission()) {
            return $next($request);
        }
        return redirect()->route('unauthorized');
    }
}
