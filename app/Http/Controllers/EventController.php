<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request = ModelsRequest::where(['company_id' => Auth::user()->company->id, 'status' => REQUEST_STATUS[0]])->get();

        // dd(Auth::user()->eventMode);

        return view('admin.pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function running()
    {
        return view('admin.pages.event.running');
    }

    public function upcoming()
    {
        return view('admin.pages.event.upcoming');
    }
}
