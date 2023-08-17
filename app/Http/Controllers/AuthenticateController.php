<?php

namespace App\Http\Controllers;

use App\Helpers\CaptchaHelper;
use App\Helpers\LoginTrailHelper;
use App\Mail\ForgetPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthenticateController extends Controller
{
    function login()
    {
        $captcha_number =  CaptchaHelper::generateCaptchForAdmin();
        return view('public.pages.login.admin-login', compact('captcha_number'));
    }

    function login_process(Request  $req)
    {
        $data = $req->only('username', 'password');

        if (!CaptchaHelper::isAdminCaptchaValid($req->captcha)) {
            return redirect()->back()->withErrors('Incorrect captcha');
        }
        if (Auth::attempt($data)) {
            if (Auth::user()->user_type == 'VENDOR') {
                Auth::logout();
                return redirect()->back()->withErrors('Unautherized access denied');
            }
            if (Auth::user()->user_type == 'EMPLOYEE') {
                if (!Auth::user()->employee->is_active) {
                    return redirect()->back()->withErrors('Account has been disabled , please contact the administrator');
                }
            } else {
                LoginTrailHelper::saveLoginInfo();
                return redirect()->route('admin-dashboard');
            }
        }
        return redirect()->back()->withErrors('Username or password is wrong');
    }

    function logout()
    {
        LoginTrailHelper::saveLogoutInfo();

        if (Auth::user()->user_type == 'ADMIN' || Auth::user()->user_type == 'EMPLOYEE') {
            $redirect_To = 'login';
        } else {
            $redirect_To = 'vendor.login';
        }

        Auth::logout();

        return redirect()->route($redirect_To);
    }

    function loginV()
    {
        $captcha_number =  CaptchaHelper::generateCaptch();
        return view('public.pages.login.vendor-login', compact('captcha_number'));
    }

    function login_processV(Request $req)
    {
        $data = $req->only('username', 'password');

        if (!CaptchaHelper::isCaptchaValid($req->captcha)) {
            return redirect()->back()->with('error', 'Invalid Captcha');
        }

        if (Auth::attempt($data)) {

            if (Auth::user()->user_type == "ADMIN" || Auth::user()->user_type == "EMPLOYEE") {
                Auth::logout();
                return redirect()->back()->with('error', 'Unautherized access denied');
            }

            if (!Auth::user()->email_verified_at instanceof Carbon) {
                Auth::logout();
                return redirect()->back()->with('error', 'please verify your email address first, Verification link has already been sent to your email address');
            }
            if (Auth::user()->vendor->is_approved) {
                LoginTrailHelper::saveLoginInfo();
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
        if (Auth::user()->user_type == USER_TYPES[0] || Auth::user()->user_type == USER_TYPES[2]) {
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
            return redirect()->route('vendor.login');
        } else {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }
    }

    function getResetLinkForm()
    {
        return view('public.pages.forget-password.send-link');
    }
    function sendResetLink(Request $req)
    {
        $email = $req->email;

        if (!$email) {
            return redirect()->back()->with('error', 'Email id required ');
        } else {
            $user = User::where('email', $email)->first();
            if ($user) {
                $data['email'] = $email;
                $data['username'] = $user->username;
                $token = base64_encode(json_encode(['email' => $email, 'random_int' => random_int(11111111111111111, 99999999999999999)]));
                $data['reset_link'] = route('reset-password-form', $token);
                Mail::to($email)->send(new ForgetPasswordMail($data));
                return redirect()->back()->with('success', 'Password reset link has been sent to this email id');
            } else {
                return redirect()->back()->with('error', 'Email id not found in system');
            }
        }
    }


    function resetPasswordForm($token)
    {
        // dd(json_decode(base64_decode($token)));

        $decodedToken = json_decode(base64_decode($token));
        $username = User::where('email', $decodedToken->email)->first()->username;
        return view('public.pages.forget-password.reset-password', compact('username'));
    }
    function resetPassword(Request $req)
    {
        $user = User::where('username', $req->username)->first();
        // dd($req->password);
        if (!$user) {
            return redirect()->back()->with('error', 'Username id not found in system');
        }
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->back()->with('success', 'Password changed successfully');
    }


    function verifyEmail($token)
    {
        $decode = base64_decode($token);
        $user =  User::where('email', $decode)->first();
        if ($user) {
            if ($user->email_verified_at) {
                return redirect()->route('vendor.login')->with('info', 'Email already verified');
            } else {
                $user->update(['email_verified_at' => Carbon::now()]);
                return redirect()->route('vendor.login')->with('success', 'Email verified successfully');
            }
        } else {
            return redirect()->route('vendor.login')->with('error', 'Account not found');
        }
    }
}
