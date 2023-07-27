<?php

namespace App\Helpers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class CompanyHelper
{
    static public function companyExist()
    {
        $company = Company::where('user_id', Auth::user()->id)->first();
        if ($company  instanceof Company) return true;
        return false;
    }
    static public function getCompany()
    {
        $company = Company::where('user_id', Auth::user()->id)->first();
        return $company;
    }

    static public function getCompanyFromHost()
    {
        $company = Company::where('web_url',  request()->ip())->first();
        return $company;
    }
}
