<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Models\Helpersupport;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class HelpsupportController extends Controller
{
    //

    function create()
    {
        $cId = CompanyHelper::getCompanyFromHost()->id;
        $hs = Helpersupport::where('company_id', $cId)->first();
        return view('admin.pages.helpSupport.help-support', compact('hs'));
    }
    function store(Request $req)
    {
        try {
            if (!$req->id) {
                $helpSupport =  Helpersupport::create(array_merge($req->all(), ['company_id' => CompanyHelper::getCompanyFromHost()->id]));
                if ($helpSupport instanceof Helpersupport) {
                    return redirect()->back()->with('success', 'saved Successfully');
                }
            } else {
                $helpSupport = Helpersupport::find($req->id)->update(array_merge($req->all(), ['company_id' => CompanyHelper::getCompanyFromHost()->id]));
                if ($helpSupport) {
                    return redirect()->back()->with('success', 'updated Successfully');
                }
            }
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'duplicate phone or email entry not allowed');
        }
    }
}
