<?php

namespace App\Http\Controllers;

use App\Models\UnitOfMeasure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UOMController extends Controller
{
    function index()
    {
        $uoms = UnitOfMeasure::orderBy('created_at', 'desc')->get();
        return view('admin.pages.settings.master.uom.list', compact('uoms'));
    }
    function create()
    {
        $uom = null;
        return view('admin.pages.settings.master.uom.create', compact('uom'));
    }
    function store(Request $req)
    {
        $uom = UnitOfMeasure::create(array_merge($req->all(), ['user_id' => Auth::user()->id]));
        if ($uom instanceof UnitOfMeasure) {
            return redirect()->route('uom.list')->with('success', 'UOM Created Successfully');
        } else {
            return redirect()->back()->with('error', 'UOM Creation failed')->withInput();
        }
    }

    function edit($id)
    {
        $uom = UnitOfMeasure::find($id);
        if (!$uom) {
            return redirect()->route('uom.list')->with('error', 'UOM you are trying to access, does not exist');
        }
        return view('admin.pages.settings.master.uom.edit', compact('uom'));
    }

    function update(Request $req)
    {
        $uom = UnitOfMeasure::find($req->id);
        if (!$uom) {
            return redirect()->route('uom.list')->with('error',  'UOM you are trying to access, does not exist');
        } else {
            $uom = $uom->update(array_merge($req->all(), ['user_id' => Auth::user()->id]));
            if ($uom) {
                return redirect()->route('uom.list')->with('success', 'UOM updated Successfully');
            } else {
                return redirect()->back()->with('error', 'UOM update failed')->withInput();
            }
        }
    }
}
