<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Helpers\DepartmentHelper;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemRPUModel;
use App\Models\Region;
use App\Models\UnitOfMeasure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RoleHelper;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = DB::table('items')
            ->select('items.id', 'categories.name as cat_name', 'items.code as item_code', 'items.description', 'unit_of_measures.name as unit', 'items.updated_at', 'items.is_active')
            ->join('categories', 'categories.id', '=', 'items.category_id')
            ->join('unit_of_measures', 'unit_of_measures.id', '=', 'items.unit_of_measure_id')
            ->get();
        return view('admin.pages.catalog.item.list', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('user_id', Auth::user()->id)->get();
        $uOm = UnitOfMeasure::where('user_id', Auth::user()->id)->get();
        $regions = Region::where('user_id', Auth::user()->id)->get();
        return view('admin.pages.catalog.item.create', compact('categories', 'uOm', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // dd($req->all());
        $item = Item::create([
            'code' => $req->code,
            'category_id' => $req->category_id,
            'unit_of_measure_id' => $req->unit_of_measure_id,
            'description' => $req->description,
            'decrement_price' => $req->decrement_price,
            'is_manually_change_bidding_price' => $req->is_manually_change_bidding_price,
            'is_active' => $req->is_active,
            'user_id' => Auth::user()->id,
        ]);

        for ($i = 0; $i < count($req->region); $i++) {
            ItemRPUModel::create([
                'region_id' => $req->region[$i],
                'price' => $req->price[$i],
                'item_unit' => $req->unit[$i],
                'item_unit_details' => $req->unit_details[$i],
                'category_id' => $req->category_id,
                'item_id' => $item->id,
                'user_id' => Auth::user()->id
            ]);
        }

        return redirect()->route('item.list')->with('success', 'item has been created');
    }
}
