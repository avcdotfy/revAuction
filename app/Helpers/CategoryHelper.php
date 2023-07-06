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
        $category = Category::where('company_id', CompanyHelper::getCompanyFromHost()->id)->get();
        // dd($category);
        return $category;
    }
}
