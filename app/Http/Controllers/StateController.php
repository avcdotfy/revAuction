<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    function index()
    {
        return view('admin.pages.settings.master.state.list');
    }
    function create()
    {
        return view('admin.pages.settings.master.state.create');
    }
    function store(Request $req)
    {
        dd($req->all());
    }
}
