<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    //
    public $company_id;
    public $user_id;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->company_id = Auth::user()->company->id;
            $this->user_id = Auth::user()->id;
            return $next($request);
        });
    }
}
