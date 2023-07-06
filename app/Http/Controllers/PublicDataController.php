<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class PublicDataController extends Controller
{
    function stateByCounryId(Request $req)
    {
        $country_id = $req->country_id;
        $state = State::where('country_id', $country_id)->get();

        return response()->json(['state' => $state, 'status' => true], 200);
    }

    // function getVendors($cat_id)
    // {
    //     $requests = ModelsRequest::where([
    //         'company_id' => $this->user_id,
    //         'status' => REQUEST_STATUS[0],
    //         'category_id' => $cat_id
    //     ])->get();
    // }
}
