<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Event;
use App\Models\Request as ModelsRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{
    function index()
    {

        $newRequest = ModelsRequest::where(['company_id' => $this->company_id, 'status' => REQUEST_STATUS[2]])->get()->count();

        $approvedRequest = ModelsRequest::where(['company_id' => $this->company_id, 'status' => REQUEST_STATUS[0]])->get()->count();

        $rejectRequest = ModelsRequest::where(['company_id' => $this->company_id, 'status' => REQUEST_STATUS[1]])->get()->count();

        $upcomingEvents = Event::where(['company_id' => $this->company_id, 'status' => EVENT_STATUS[0]])->get();

        $runningEvents = Event::where(['company_id' => $this->company_id, 'status' => EVENT_STATUS[1]])->get();

        $closedEvents = Event::where(['company_id' => $this->company_id, 'status' => EVENT_STATUS[2]])->get();

        return view(
            'admin.pages.dashboard.dashboard',
            [
                'newRequest' => $newRequest,
                'approvedRequest' => $approvedRequest,
                'rejectRequest' => $rejectRequest,
                'upcomingEvents' => $upcomingEvents,
                'runningEvents' => $runningEvents,
                'closedEvents' => $closedEvents,
            ]
        );
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
