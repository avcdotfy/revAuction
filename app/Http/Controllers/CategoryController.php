<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Helpers\DepartmentHelper;
use App\Models\Category;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RoleHelper;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('company_id', $this->company_id)->get();
        return view('admin.pages.catalog.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.catalog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // dd($req->all());
        $category = Category::create([
            'code' => $req->code,
            'name' => $req->name,
            'terms_condition' => $req->terms_condition,
            'item_time_trigger' => $req->item_time_trigger,
            'time_gap_between_each_item' => $req->time_gap_between_each_item,
            'last_minute_closing_time_increment' => $req->last_minute_closing_time_increment,
            'last_minute_closing_time_increment' => $req->last_minute_closing_time_increment,
            'is_active' => $req->is_active,
            'company_id' => $this->company_id,
            'user_id' => $this->user_id,
        ]);

        if ($category instanceof Category)
            return redirect()->route('category.list')->with('success', 'Category has been created');
    }
}
