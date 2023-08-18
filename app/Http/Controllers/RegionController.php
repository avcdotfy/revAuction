<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegionController extends Controller
{
    function index()
    {
        $regions = Region::orderBy('created_at', 'desc')->get();
        return view('admin.pages.settings.master.region.list', compact('regions'));
    }
    function create()
    {
        $region = null;
        return view('admin.pages.settings.master.region.create', compact('region'));
    }
    function store(Request $req)
    {
        try {
            $reg = Region::create(array_merge($req->all(), ['user_id' => Auth::user()->id]));
            if ($reg instanceof Region) {
                return redirect()->route('region.list')->with('success', 'Region Created Successfully');
            }
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Region Creation failed , try different name')->withInput();
        }
    }

    function edit($id)
    {
        $region = Region::find($id);
        if (!$region) {
            return redirect()->route('region.list')->with('error', 'Region you are trying to access, does not exist');
        }
        return view('admin.pages.settings.master.region.edit', compact('region'));
    }

    function update(Request $req)
    {
        $reg = Region::find($req->id);
        if (!$reg) {
            return redirect()->route('region.list')->with('error', 'Region you are trying to access, does not exist');
        } else {
            $reg = $reg->update(array_merge($req->all(), ['user_id' => Auth::user()->id]));
            if ($reg) {
                return redirect()->route('region.list')->with('success', 'Region update Successfully');
            } else {
                return redirect()->back()->with('error', 'Region update failed')->withInput();
            }
        }
    }
}
