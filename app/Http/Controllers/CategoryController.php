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
        $categories = Category::where('company_id', $this->company_id)->orderBy('created_at', 'desc')->get();
        return view('admin.pages.catalog.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = null;
        return view('admin.pages.catalog.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // dd($req->all());
        $category = Category::where('code', $req->code)->first();
        if ($category) {
            return redirect()->back()->with('error', 'Category code already exists ')->withInput();
        }
        $category = Category::where('name', $req->name)->first();
        if ($category) {
            return redirect()->back()->with('error', 'Category name already exists ')->withInput();
        }
        $category = Category::create([
            'code' => $req->code,
            'name' => $req->name,
            'terms_condition' => $req->terms_condition,
            'item_time_trigger' => $req->item_time_trigger,
            // 'time_gap_between_each_item' => $req->time_gap_between_each_item,
            'last_minute_closing_time_increment' => $req->last_minute_closing_time_increment,
            'is_active' => $req->is_active,
            'company_id' => $this->company_id,
            'user_id' => $this->user_id,
        ]);

        if ($category instanceof Category)
            return redirect()->route('category.list')->with('success', 'Category has been created');
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.pages.catalog.category.edit', compact('category'));
    }

    function update(Request $req)
    {
        // dd($req->id);
        $category = Category::where('code', $req->code)->first();
        if ($category && $category->id != $req->id) {
            return redirect()->back()->with('error', 'Category code already exists ')->withInput();
        }
        $category = Category::where('name', $req->name)->first();
        if ($category  && $category->id != $req->id) {
            return redirect()->back()->with('error', 'Category name already exists ')->withInput();
        }
        $category = Category::find($req->id)->update([
            'code' => $req->code,
            'name' => $req->name,
            'terms_condition' => $req->terms_condition,
            'item_time_trigger' => $req->item_time_trigger,
            // 'time_gap_between_each_item' => $req->time_gap_between_each_item,
            'last_minute_closing_time_increment' => $req->last_minute_closing_time_increment,
            'last_minute_closing_time_increment' => $req->last_minute_closing_time_increment,
            'is_active' => $req->is_active,
        ]);

        if ($category)
            return redirect()->route('category.list')->with('success', 'Category has been updated');
    }
}
