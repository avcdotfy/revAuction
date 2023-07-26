<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends BaseController
{
    //
    function index()
    {
        $countries = Country::where('company_id', '=', $this->company_id)->get();
        return view('admin.pages.settings.master.country.list', compact('countries'));
    }
    function create()
    {
        $country = null;
        return view('admin.pages.settings.master.country.create', compact('country'));
    }
    function store(Request $req)
    {
        // dd($req->all());
        $country = Country::create(array_merge($req->all(), ['user_id' => $this->user_id, 'company_id' => $this->company_id]));

        if ($country instanceof Country) {
            return redirect()->route('country.list')->with('success', 'Country Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Country creation failed');
        }
    }

    function edit($id)
    {
        $country = Country::find($id);
        // dd($country);
        return view('admin.pages.settings.master.country.edit', compact('country'));
    }

    function  update(Request $req)
    {
        // dd($req->all());
        $country = Country::find($req->id)->update(array_merge($req->all(), ['user_id' => $this->user_id, 'company_id' => $this->company_id]));

        if ($country) {
            return redirect()->route('country.list')->with('success', 'Country updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Country update failed');
        }
    }
}
