<?php

namespace App\Http\Controllers;

use App\Helpers\LoginTrailHelper;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    function login()
    {
        return view('public.pages.login.admin-login');
    }

    function login_process(Request  $req)
    {
        $data = $req->only('username', 'password');

        if (Auth::attempt($data)) {
            if (Auth::user()->user_type == 'VENDOR') {
                Auth::logout();
                return redirect()->back()->withErrors('Unautherized access denied');
            } else {
                LoginTrailHelper::saveLoginInfo();
                return redirect()->route('admin-dashboard');
            }
        }
        return redirect()->back()->withErrors('Username or password is wrong');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('vendor.login');
    }

    function loginV()
    {
        return view('public.pages.login.vendor-login');
    }

    function login_processV(Request $req)
    {
        $data = $req->only('username', 'password');

        if (Auth::attempt($data)) {

            if (Auth::user()->user_type == "ADMIN") {
                Auth::logout();
                return redirect()->back()->with('error', 'Unautherized access denied');
            }

            if (Auth::user()->vendor->is_approved) {
                return redirect()->route('vendor.dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('info', 'Your account is under process.');
            }
        }
        return redirect()->back()->with('error', 'Username or password is wrong');
    }

    function changePassword()
    {
        if (Auth::user()->user_type == USER_TYPES[0]) {
            $source = 'admin';
        } else {
            $source = 'vendor';
        }
        return view('public.pages.changePass.change-password', compact('source'));
    }

    function doChangePassword(Request $req)
    {
        // dd(Auth::attempt(['username' => Auth::user()->username, 'password' => $req->old_password]));
        if (Auth::attempt(['username' => Auth::user()->username, 'password' => $req->old_password])) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($req->password);
            $user->save();
            Auth::logout();
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }
    }
}
