<?php

namespace App\Http\Controllers;

use App\Models\Eventmode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventmodeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $eventModes = Eventmode::all();
        return view('admin.pages.settings.master.eventMode.list', compact('eventModes'));
    }
    function create()
    {
        $eventmode = null;
        return view('admin.pages.settings.master.eventMode.create', compact('eventmode'));
    }
    function store(Request $req)
    {
        $reg = Eventmode::create(array_merge($req->all(), ['user_id' => $this->user_id, 'company_id' => $this->company_id]));
        if ($reg instanceof Eventmode) {
            return redirect()->route('eventmode.list')->with('success', 'event mode Created Successfully');
        } else {
            return redirect()->back()->with('error', 'event mode Creation failed')->withInput();
        }
    }

    function edit($id)
    {
        $eventmode = Eventmode::find($id);
        return view('admin.pages.settings.master.eventmode.edit', compact('eventmode'));
    }

    function update(Request $req)
    {
        $em = Eventmode::find($req->id)->update(array_merge($req->all(), ['user_id' => $this->user_id, 'company_id' => $this->company_id]));
        if ($em) {
            return redirect()->route('eventmode.list')->with('success', 'Event Mode update Successfully');
        } else {
            return redirect()->back()->with('error', 'Event Mode update failed')->withInput();
        }
    }
}
