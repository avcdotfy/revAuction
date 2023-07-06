<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    function login()
    {
        return view('public.pages.login.admin-login');
    }

    function login_process(Request  $req)
    {
        $data = $req->only('username', 'password');

        if (Auth::attempt($data)) return redirect()->route('admin-dashboard');

        return redirect()->back()->withErrors('Username or password is wrong');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    function loginV()
    {
        return view('public.pages.login.vendor-login');
    }

    function login_processV(Request $req)
    {
        $data = $req->only('username', 'password');

        if (Auth::attempt($data)) return redirect()->route('vendor.dashboard');

        return redirect()->back()->with('error', 'Username or password is wrong');
    }
}
