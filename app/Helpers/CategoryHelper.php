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
}
