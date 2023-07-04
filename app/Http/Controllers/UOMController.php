<?php

namespace App\Http\Controllers;

use App\Models\UnitOfMeasure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UOMController extends Controller
{
    function index()
    {
        $uoms = UnitOfMeasure::all();
        return view('admin.pages.settings.master.uom.list', compact('uoms'));
    }
    function create()
    {
        return view('admin.pages.settings.master.uom.create');
    }
    function store(Request $req)
    {
        $reg = UnitOfMeasure::create(array_merge($req->all(), ['user_id' => Auth::user()->id]));
        if ($reg instanceof UnitOfMeasure) {
            return redirect()->route('uom.list')->with('success', 'UOM Created Successfully');
        } else {
            return redirect()->back()->with('error', 'UOM Creation failed')->withInput();
        }
    }
}
