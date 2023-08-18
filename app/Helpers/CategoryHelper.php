<?php

namespace App\Helpers;

use App\Models\Category;

use App\Models\Department;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;


class CategoryHelper
{
    public static function getCategories()
    {
        $cId = CompanyHelper::getCompanyFromHost() ? CompanyHelper::getCompanyFromHost()->id : 1;
        $category = Category::where('company_id', $cId)->get();
        // dd($category);
        return $category;
    }


    public static function getCategoriesBasedOnUserType()
    {
        $cId = CompanyHelper::getCompanyFromHost() ? CompanyHelper::getCompanyFromHost()->id : 1;

        if (Auth::user()->user_type == ADMIN) {
            $categories = Category::where('company_id', $cId)->orderBy('created_at', 'desc')->get();
        }
        if (Auth::user()->user_type == EMPLOYEE) {
            $categories = Category::where('company_id',  $cId)->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get(); //Employee can access those categories that are created by employee
            $assignedCats = Auth::user()->employee->categories;  //Employee can access only those categories that are assigned during employee creation
            $categories = $categories->merge($assignedCats);
        }

        return $categories;
    }
}
