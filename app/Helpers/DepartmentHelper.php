<?php

namespace App\Helpers;

use App\Models\Department;
use Illuminate\Support\Facades\Auth;

class DepartmentHelper
{
    static public function departmentExist()
    {
        $department = Department::where('user_id', Auth::user()->id)->first();
        if ($department  instanceof Department) return true;
        return false;
    }
    static public function getDepartments()
    {
        $department = Department::where('user_id', Auth::user()->id)->get();
        return $department;
    }
}
