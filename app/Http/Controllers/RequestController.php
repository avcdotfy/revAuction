<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{

    function new_requests()
    {
        $new_reqs = ModelsRequest::where(['company_id' => Auth::user()->company->id, 'status' => REQUEST_STATUS[2]])
            ->paginate(10);

        return view('admin.pages.vendor.new-request', compact('new_reqs'));
    }

    function approved()
    {
        $requests  = ModelsRequest::where(['company_id' => Auth::user()->company->id, 'status' => REQUEST_STATUS[0]])->paginate(10);
        return view('admin.pages.vendor.approved', compact('requests'));
    }
    function rejected()
    {
        $requests  = ModelsRequest::where(['company_id' => Auth::user()->company->id, 'status' => REQUEST_STATUS[1]])->paginate(10);
        return view('admin.pages.vendor.rejected', compact('requests'));
    }

    public function accept(Request $r)
    {
        dd($r->all());
        $ids = explode(',', $r->id);
        $request = ModelsRequest::whereIn('id', $ids)->update([
            'status' => REQUEST_STATUS[0]
        ]);
        return redirect()->back();
    }

    public function reject(Request $r)
    {
        dd($r->all());
        $ids = explode(',', $r->id);
        $request = ModelsRequest::whereIn('id', $ids)->update([
            'status' => REQUEST_STATUS[1]
        ]);
        return redirect()->back();
    }
}
