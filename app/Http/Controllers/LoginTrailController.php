<?php

namespace App\Http\Controllers;

use App\Models\LoginTrail;
use Illuminate\Http\Request;

class LoginTrailController extends Controller
{
    //

    function employeeLogin()
    {
        $logins = LoginTrail::all();
        return view('admin.pages.loginTrails.employee-login', compact('logins'));
    }
    function vendorLogin()
    {
        return view('admin.pages.loginTrails.vendor-login');
    }
}
