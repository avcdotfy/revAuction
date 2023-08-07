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
use Illuminate\Support\Facades\URL;
use PharIo\Manifest\Url as ManifestUrl;
use RoleHelper;
use stdClass;

class ItemController extends BaseController
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
        $categories = Category::where(['user_id' => Auth::user()->id, 'is_active' => true])->get();
        $uOm = UnitOfMeasure::where('user_id', Auth::user()->id)->where('is_active', true)->get();
        $regions = Region::where('user_id', Auth::user()->id)->where('is_active', true)->get();
        $item = null;
        return view('admin.pages.catalog.item.create', compact('categories', 'uOm', 'regions', 'item'));
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
            'user_id' => $this->user_id,
            'company_id' => $this->company_id
        ]);

        for ($i = 0; $i < count($req->region); $i++) {
            if (!$req->region[$i]) continue;
            ItemRPUModel::create([
                'region_id' => $req->region[$i],
                'price' => $req->price[$i],
                'item_unit' => $req->unit[$i],
                'item_unit_details' => $req->unit_details[$i],
                'category_id' => $req->category_id,
                'item_id' => $item->id,
                'user_id' => $this->user_id,
                'company_id' => $this->company_id
            ]);
        }
        return redirect()->route('item.list')->with('success', 'item has been created');
    }

    public function getItems($cat_id)
    {
        $itemRpus = ItemRPUModel::where(['company_id' => $this->company_id])->get();
    }

    public function getItemRPUsFromCategoryId(Request $req)
    {
        $catId = $req->cat_id;

        $itemRpusData = ItemRPUModel::where(['company_id' => $this->company_id, 'category_id' => $catId])->get();

        $itemRpus = [];

        foreach ($itemRpusData as $key => $rpu) {
            $rpuObj = new stdClass;
            $rpuObj->id = $rpu->id;
            $rpuObj->code =  $rpu->item->code;
            $rpuObj->description  = $rpu->item->description;
            $rpuObj->unit_name  =  $rpu->item->unit->name;
            $rpuObj->region  =  $rpu->region->name;
            $rpuObj->price  =   $rpu->price;
            array_push($itemRpus, $rpuObj);
        }

        return response()->json(['items' => $itemRpus, 'status' => true]);
    }


    public function getItemDetails(Request $re)
    {
        $item = Item::find($re->item_id);

        $rpus = [];

        foreach ($item->regionPriceUnit as $key => $itemRpu) {
            $rpu = new stdClass;
            $rpu->region = $itemRpu->region->name;
            $rpu->price = $itemRpu->price;
            $rpu->unit = $itemRpu->item_unit;
            $rpu->unit_details = $itemRpu->item_unit_details;
            $rpus[] = $rpu;
        }
        return response()->json(['item' => $item, 'itemRpu' => $rpus, 'category' => $item->category]);
    }

    function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::where('user_id', Auth::user()->id)->get();
        $uOm = UnitOfMeasure::where('user_id', Auth::user()->id)->get();
        $regions = Region::where('user_id', Auth::user()->id)->get();
        return view('admin.pages.catalog.item.edit', compact('categories', 'uOm', 'regions', 'item'));
    }

    function update(Request $req)
    {
        // dd($req->all());
        $item = Item::find($req->id)->update([
            'code' => $req->code,
            'category_id' => $req->category_id,
            'unit_of_measure_id' => $req->unit_of_measure_id,
            'description' => $req->description,
            'decrement_price' => $req->decrement_price,
            'is_manually_change_bidding_price' => $req->is_manually_change_bidding_price,
            'is_active' => $req->is_active,
        ]);
        // dd($req->all());
        $rpus =  ItemRPUModel::where('item_id', $req->id)->get();

        $outerIndex = null;
        foreach ($rpus  as $i => $rpu) {
            // if (!$req->region[$i]) continue;

            if (in_array($rpu->id, $req->rpuIds)) {
                ItemRPUModel::where('id', $rpu->id)->update([
                    'region_id' => $req->region[$i],
                    'price' => $req->price[$i],
                    'item_unit' => $req->unit[$i],
                    'item_unit_details' => $req->unit_details[$i],
                    'category_id' => $req->category_id,
                    'item_id' => $req->id,
                    'user_id' => $this->user_id,
                    'company_id' => $this->company_id
                ]);
                $outerIndex = $i;
            }
        }

        if (count($req->region) > 1) {
            $outerIndex  = $outerIndex + 1;
        }

        foreach ($req->region as $i => $reg) {
            if (!$req->region[$i]) continue;
            if ($i == $outerIndex) {
                ItemRPUModel::create([
                    'region_id' => $req->region[$i],
                    'price' => $req->price[$i],
                    'item_unit' => $req->unit[$i],
                    'item_unit_details' => $req->unit_details[$i],
                    'category_id' => $req->category_id,
                    'item_id' => $req->id,
                    'user_id' => $this->user_id,
                    'company_id' => $this->company_id
                ]);

                $outerIndex += 1;
            }
        }
        return redirect()->route('item.list')->with('success', 'item has been updated successfully');
    }


    function deleteRpu($rpuId, $iId, $regId)
    {
        $rpu = ItemRPUModel::where(['id' => $rpuId, 'item_id' => $iId, 'region_id' => $regId])->first();
        if ($rpu) {
            ItemRPUModel::where(['id' => $rpuId, 'item_id' => $iId, 'region_id' => $regId])->delete();
            return redirect()->back()->with('success', 'Rpu deleted successfully');
        } else {
            return redirect()->back()->with('error', 'item rpu not found created');
        }
    }
}
