<?php

namespace App\Http\Controllers;

use App\Helpers\EventInvitationHelper;
use App\Models\Category;
use App\Models\Event;
use App\Models\EventMode;
use App\Models\ItemRPUModel;
use App\Models\Request as ModelsRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventModes = EventMode::where(['company_id' => $this->company_id])->get();
        $categories = Category::where(['company_id' => $this->company_id])->get();
        $requests = ModelsRequest::where(['company_id' => $this->user_id, 'status' => REQUEST_STATUS[0]])->get();
        $itemRpus = ItemRPUModel::where(['company_id' => $this->company_id])->get();
        return view('admin.pages.event.create', compact('eventModes', 'categories', 'requests', 'itemRpus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // dd($req->all());
        $data = [
            "event_mode_id" => $req->event_mode_id,
            "opening_date" => $req->opening_date,
            "opening_time" => $req->opening_time,

            "closing_date" => $req->closing_date,
            "closing_time" => $req->closing_time,
            "category_id" => $req->category_id,
            "terms_condition" => $req->terms_condition,
            "subject_line" => $req->subject_line,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id,
        ];
        $event =  Event::create($data);
        $event->vendors()->attach($req->vendor_id);
        $event->items()->attach($req->itemRpu);

        if ($event instanceof Event) {
            $data = [
                'company_name' => Auth::user()->company->name,
                "opening_date" => $req->opening_date,
                "opening_time" => $req->opening_time,
                "closing_date" => $req->closing_date,
                "closing_time" => $req->closing_time,
                "vendor_ids" => $req->vendor_id,
                "item_ids" => $req->itemRpu
            ];
            EventInvitationHelper::inviteViaEmail($data);
            return redirect()->back()->with('success', 'Event Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
        dd($event);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function running()
    {
        return view('admin.pages.event.running');
    }

    public function upcoming()
    {
        return view('admin.pages.event.upcoming');
    }
}
