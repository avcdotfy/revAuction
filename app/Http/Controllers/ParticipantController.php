<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Decision;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    //

    public function getParticipatedEvents()
    {
        $participates = Participant::where(['vendor_id' => Auth::user()->vendor->id])->groupBy('event_id')->get();
        // dd($participates);
        return view('vendor.pages.participated-events', compact('participates'));
    }

    public function getParticipatedEventItemList($eid)
    {
        $participates = Participant::where(['vendor_id' => Auth::user()->vendor->id, 'event_id' => $eid])->get();
        return view('vendor.pages.participate-events-item-list', compact('participates'));
    }


    public function getParticipatedEventsStatus()
    {
        $participates = $participates = Participant::where(['vendor_id' => Auth::user()->vendor->id])->groupBy('event_id')->get();
        return view('vendor.pages.participated-event-status', compact('participates'));
    }

    public function getParticipatedEventItemStatusList($eid)
    {
        $decisions = Decision::where(['vendor_id' => Auth::user()->vendor->id, 'event_id' => $eid])->get();
        // dd($decisions);
        return view('vendor.pages.participated-event-item-status-list', compact('decisions'));
    }

    public function participatedEventStatusReports()
    {
        $participatedEvents = Participant::where('vendr_id', Auth::user()->id)->get();
        return view('vendor.pages.participated-events-status-report', 'participatedEvents');
    }


    public function participatedEventReports()
    {
        $categories = Category::where('is_active', true)->get();
        $participatedEvents = Participant::where('vendor_id', Auth::user()->id)->groupBy('event_id')->get();

        return view('vendor.pages.participated-events-reports', compact('categories', 'participatedEvents'));
    }
    public function filterParticipatedEventList(Request $req)
    {
        $categories = Category::where('is_active', true)->get();
        
        $participatedEvents = Participant::where('vendor_id', Auth::user()->id)->groupBy('event_id')->get();

        // $cat_id = $req->cat_id;
        dd($req->all());


        return view('vendor.pages.participated-events-reports', compact('categories'));
    }
}
