<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.pages.dashboard.dashboard');
    }

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
}
