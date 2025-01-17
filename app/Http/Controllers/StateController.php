<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends BaseController
{
    function index()
    {
        $states = State::where(['company_id' => $this->company_id])->get();
        return view('admin.pages.settings.master.state.list', compact('states'));
    }
    function create()
    {
        $countries = Country::where(['company_id' => $this->company_id])->get();
        return view('admin.pages.settings.master.state.create', compact('countries'));
    }
    function store(Request $req)
    {
        $state = State::create(array_merge($req->all(), ['user_id' => $this->user_id, 'company_id' => $this->company_id]));

        if ($state instanceof State) {
            return redirect()->route('state.list')->with('success', 'State Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

   
}
