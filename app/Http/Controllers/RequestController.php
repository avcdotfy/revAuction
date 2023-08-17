<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Mail\VendorRequestStatusMail;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function PHPSTORM_META\type;

class RequestController extends Controller
{
    protected $cId;
    function __construct()
    {
        $this->cId =  CompanyHelper::getCompanyFromHost() ?  CompanyHelper::getCompanyFromHost()->id : 1;
    }

    function new_requests()
    {
        $new_reqs = ModelsRequest::where(['company_id' =>  $this->cId, 'status' => REQUEST_STATUS[2]])->get();

        return view('admin.pages.vendor.new-request', compact('new_reqs'));
    }

    function approved()
    {
        $requests  = ModelsRequest::where(['company_id' =>  $this->cId, 'status' => REQUEST_STATUS[0]])->get();
        return view('admin.pages.vendor.approved', compact('requests'));
    }
    function rejected()
    {
        $requests  = ModelsRequest::where(['company_id' =>  $this->cId, 'status' => REQUEST_STATUS[1]])->get();
        return view('admin.pages.vendor.rejected', compact('requests'));
    }

    public function accept(Request $r)
    {
        $ids = explode(',', $r->ids);
        $requests = ModelsRequest::whereIn('id', $ids);
        $rowsAffected = $requests->update([
            'status' => REQUEST_STATUS[0]
        ]);

        // dd($requests);
        foreach ($requests->get() as $key => $req) {

            $req->vendor->update([
                'is_approved' => true
            ]);

            $req->remark()->create([
                'message' => $r->msg,
                'request_id' => $req->id,
                'user_id' =>  Auth::user()->id
            ]);
            $data['vendor_name'] = $req->vendor->user->username;
            $data['status'] = 'Approved';
            $data['remarks'] = $r->msg;
            Mail::to($req->vendor->user->email)->send(new VendorRequestStatusMail($data));
        }

        if ($rowsAffected) {
            return response()->json(['status' => true, 'rows_affected' => $rowsAffected, 'messages' => 'request accepted successfully'], 200);
        } else {
            return response()->json(['status' => false, 'rows_affected' => 0, 'messages' => 'someting went wrong'], 419);
        }
        // return redirect()->back();
    }

    public function reject(Request $r)
    {
        $ids = explode(',', $r->ids);
        $requests = ModelsRequest::whereIn('id', $ids);
        $rowsAffected = $requests->update([
            'status' => REQUEST_STATUS[1]
        ]);

        // dd($requests);
        foreach ($requests->get() as $key => $req) {
            $req->vendor->update([
                'is_approved' => false
            ]);

            $req->remark()->create([
                'message' => $r->msg,
                'request_id' => $req->id,
                'user_id' =>  Auth::user()->id
            ]);

            $data['vendor_name'] = $req->vendor->user->username;
            $data['status'] = 'Rejected';
            $data['remarks'] = $r->msg;
            Mail::to($req->vendor->user->email)->send(new VendorRequestStatusMail($data));
        }

        if ($rowsAffected) {
            return response()->json(['status' => true, 'rows_affected' => $rowsAffected, 'messages' => 'request rejected successfully'], 200);
        } else {
            return response()->json(['status' => false, 'rows_affected' => 0, 'messages' => 'someting went wrong'], 419);
        }
    }
}
