<?php

namespace App\Http\Controllers;

use App\Models\EventMode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventModeController extends Controller
{
    function index()
    {
        $eventModes = EventMode::all();
        return view('admin.pages.settings.master.eventMode.list', compact('eventModes'));
    }
    function create()
    {
        return view('admin.pages.settings.master.eventMode.create');
    }
    function store(Request $req)
    {
        $reg = EventMode::create(array_merge($req->all(), ['user_id' => Auth::user()->id]));
        if ($reg instanceof EventMode) {
            return redirect()->route('eventmode.list')->with('success', 'event mode Created Successfully');
        } else {
            return redirect()->back()->with('error', 'event mode Creation failed')->withInput();
        }
    }
}
