<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegionController extends Controller
{
    function index()
    {
        $regions = Region::all();
        return view('admin.pages.settings.master.region.list', compact('regions'));
    }
    function create()
    {
        $region = null;
        return view('admin.pages.settings.master.region.create', compact('region'));
    }
    function store(Request $req)
    {
        $reg = Region::create(array_merge($req->all(), ['user_id' => Auth::user()->id]));
        if ($reg instanceof Region) {
            return redirect()->route('region.list')->with('success', 'Region Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Region Creation failed')->withInput();
        }
    }

    function edit($id)
    {
        $region = Region::find($id);
        return view('admin.pages.settings.master.region.edit', compact('region'));
    }

    function update(Request $req)
    {
        $reg = Region::find($req->id)->update(array_merge($req->all(), ['user_id' => Auth::user()->id]));
        if ($reg) {
            return redirect()->route('region.list')->with('success', 'Region update Successfully');
        } else {
            return redirect()->back()->with('error', 'Region update failed')->withInput();
        }
    }
}
