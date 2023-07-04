<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    function index()
    {
        return view('admin.pages.settings.master.country.list');
    }
    function create()
    {
        return view('admin.pages.settings.master.country.create');
    }
    function store(Request $req)
    {
        dd($req->all());
    }
}
