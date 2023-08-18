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
        $departments = Department::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('admin.pages.settings.organization.department.list', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = null;
        return view('admin.pages.settings.organization.department.create', compact('department'));
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
        if ($company instanceof Company) {
            $dep = Department::create(array_merge($req->all(), ['user_id' =>  Auth::user()->id, 'company_id' => $company->id]));
        } else {
            return redirect()->back()->with('error', 'Please add company details first !');
        }

        if ($dep instanceof Department) {
            return redirect()->route('department.list')->with('success', 'Department created successfully');
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
        $department = Department::find($id);
        if (!$department) {
            return redirect()->route('department.list')->with('error', 'Department you are trying to access, does not exist');
        }
        return view('admin.pages.settings.organization.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $dep = Department::find($req->id);
        if (!$dep) {
            return redirect()->route('department.list')->with('error', 'Department you are trying to access, does not exist');
        } else {
            $dep = $dep->update(array_merge($req->all()));
            if ($dep) {
                return redirect()->route('department.list')->with('success', 'Department updated successfully');
            } else {
                return redirect()->back()->with('error', 'Department update failed');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
