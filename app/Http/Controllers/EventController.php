<?php

namespace App\Http\Controllers;

use App\Helpers\BidHelper;
use App\Helpers\EventInvitationHelper;
use App\Models\Bid;
use App\Models\Category;
use App\Models\Event;
use App\Models\Eventmode;
use App\Models\ItemRPUModel;
use App\Models\Request as ModelsRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use stdClass;

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
        $eventModes = Eventmode::where(['company_id' => $this->company_id])->get();
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

        if (empty($req->vendor_id)) {
            return redirect()->back()->with('error', 'please select vendor');
        }
        if (empty($req->itemRpu)) {
            return redirect()->back()->with('error', 'please select category items');
        }

        $data = [
            'title' => $req->title,
            "eventmode_id" => $req->eventmode_id,
            "opening_date" => $req->opening_date,
            "opening_time" => $req->opening_time,
            "closing_date" => $req->closing_date,
            "closing_time" => $req->closing_time,
            "closing_date_time_millis" => $req->closing_date_time,
            "opening_date_time_millis" => $req->opening_date_time,
            "category_id" => $req->category_id,
            "terms_condition" => $req->terms_condition,
            "subject_line" => $req->subject_line,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id,
        ];

        $event =  Event::create($data);
        $event->vendors()->attach($req->vendor_id);
        $event->items()->attach($req->itemRpu);
        // $event->regions()->attach($req->itemRpu);

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
            return redirect()->route('event.upcoming')->with('success', 'Event Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
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
        $events = Event::where(['status' => EVENT_STATUS[1], 'company_id' => $this->company_id])->get();
        return view('admin.pages.event.running', compact('events'));
    }

    public function upcoming()
    {
        $events = Event::where(['status' => EVENT_STATUS[0], 'company_id' => $this->company_id])->get();
        return view('admin.pages.event.upcoming', compact('events'));
    }
    public function closed()
    {
        $events = Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id])->get();
        return view('admin.pages.event.closed', compact('events'));
    }
    public function decisionTaken()
    {
        $events = Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id])->get();
        return view('admin.pages.event.decision-taken', compact('events'));
    }
    public function empty()
    {
        $events = Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id])->get();
        return view('admin.pages.event.empty', compact('events'));
    }


    public function statistics($eId)
    {
        $event = BidHelper::getBidStatistics($eId)[0];
        $bidStarted = BidHelper::getBidStatistics($eId)[1];
        // dd($event->id);

        return view('admin.pages.event.statistics', compact('event', 'bidStarted'));
    }

    public function getLiveBiddersStatus(Request $r)
    {
        $bids = Bid::where(['event_id' => $r->eId, 'item_id' => $r->iId])->get();
        $bidGroupByVendorId = Bid::select('vendor_id',  DB::raw('MIN(bidding_price) as bidding_price'))->groupBy('vendor_id')->get();
        $vendors = [];
        foreach ($bids as $key => $bid) {
            $vendor = $bid->vendor;
            // dd($bid->vendor);
            $vendors[] = $vendor;
        }
        return response()->json(['vendors' => $vendors, 'bidsGrupBy' => $bidGroupByVendorId]);
    }

    public function postedEventInformation($eId)
    {
        $event = Event::find($eId);

        return view('admin.pages.event.post-event-info', compact('event'));
    }
}
