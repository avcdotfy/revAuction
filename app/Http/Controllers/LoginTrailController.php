<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginTrailController extends Controller
{
    //

    function employeeLogin()
    {
        return view('admin.pages.loginTrails.employee-login');
    }
    function vendorLogin()
    {
        return view('admin.pages.loginTrails.vendor-login');
    }
}
