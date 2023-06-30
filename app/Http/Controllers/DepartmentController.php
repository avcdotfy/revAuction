<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.settings.organization.department.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $company = Company::where('user_id', Auth::user()->id)->first();

        $dep = Department::create(array_merge($req->all(), ['user_id' =>  Auth::user()->id, 'company_id' => $company->id]));

        if ($dep instanceof Department) {
            return redirect()->back()->with('success', 'Department created successfully');
        } else {
            return redirect()->back()->with('error', 'Department creation failed');
        }
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
}
