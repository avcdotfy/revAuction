<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Type\Integer;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company =  CompanyHelper::getCompany();



        return view('admin.pages.settings.organization.company.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        if ($req->company_id) {
            $company_id = $req->company_id;
            $req->request->remove('_token');
            $req->request->remove('company_id');

            $data = array_merge($req->all(), ['user_id' =>  Auth::user()->id]);

            $company = Company::where('id', $company_id)->update($data);
        } else {
            $company = Company::create(array_merge($req->all(), ['user_id' =>  Auth::user()->id]));
        }

     
        if ($company instanceof Company || $company == 1) {
            return redirect()->back()->with('success', 'Company setup successfully');
        } else {
            return redirect()->back()->with('error', 'Company setup failed');
        }
    }

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
