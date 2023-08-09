<?php
//////////////////////////////////////////////////////////// Dont Touch if you dont understand /////////////////////////////////////////////////////////////
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Decision;
use App\Models\Participant;
use Carbon\Carbon;
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
        $participates  = Participant::where(['vendor_id' => Auth::user()->vendor->id])->groupBy('event_id')->get();
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
        $categories = Category::where('is_active', true)->get();
        $participatedEvents = Participant::where('vendor_id', Auth::user()->vendor->id)->groupBy('event_id')->get();
        $category_id = null;
        return view('vendor.pages.participated-events-status-report', compact('categories', 'participatedEvents', 'category_id'));
    }

    public function filterParticipatedEventStatusList(Request $req)
    {
        $fromDateMillis = null;
        $toDateMillis = null;

        if ($req->fromdate) {
            $fromDateMillis = Carbon::createFromFormat('Y-m-d', $req->fromdate)->timestamp * 1000;
        }
        if ($req->todate) {
            $toDateMillis = Carbon::createFromFormat('Y-m-d', $req->todate)->timestamp * 1000;
        }
        // dd($fromDateMillis);
        $participatedEvents = Participant::whereHas('event', function ($query) use ($fromDateMillis, $toDateMillis) {

            if ($fromDateMillis && $toDateMillis) {
                $query->whereBetween('closing_date_time_millis', [$fromDateMillis, $toDateMillis]);
            } elseif ($fromDateMillis) {
                $query->where('closing_date_time_millis', '>=', $fromDateMillis);
            } elseif ($toDateMillis) {
                $query->where('closing_date_time_millis', '<=', $toDateMillis);
            }
        })->where(['vendor_id' => Auth::user()->vendor->id, 'category_id' => $req->cat_id])->groupBy('event_id')->get();

        $categories = Category::where('is_active', true)->get();
        $category_id = $req->cat_id;
        return view('vendor.pages.participated-events-reports', compact('categories', 'participatedEvents', 'category_id'));
    }


    public function participatedEventReports()
    {
        $categories = Category::where('is_active', true)->get();
        $participatedEvents = Participant::where('vendor_id', Auth::user()->vendor->id)->groupBy('event_id')->get();
        // dd($participatedEvents);
        $category_id = null;
        return view('vendor.pages.participated-events-reports', compact('categories', 'participatedEvents', 'category_id'));
    }


    public function filterParticipatedEventList(Request $req)
    {
        $fromDateMillis = null;
        $toDateMillis = null;

        if ($req->fromdate) {
            $fromDateMillis = Carbon::createFromFormat('Y-m-d', $req->fromdate)->timestamp * 1000;
        }
        if ($req->todate) {
            $toDateMillis = Carbon::createFromFormat('Y-m-d', $req->todate)->timestamp * 1000;
        }
        // dd($fromDateMillis);
        $participatedEvents = Participant::whereHas('event', function ($query) use ($fromDateMillis, $toDateMillis) {

            if ($fromDateMillis && $toDateMillis) {
                $query->whereBetween('closing_date_time_millis', [$fromDateMillis, $toDateMillis]);
            } elseif ($fromDateMillis) {
                $query->where('closing_date_time_millis', '>=', $fromDateMillis);
            } elseif ($toDateMillis) {
                $query->where('closing_date_time_millis', '<=', $toDateMillis);
            }
        })->where(['vendor_id' => Auth::user()->vendor->id, 'category_id' => $req->cat_id])->groupBy('event_id')->get();

        $categories = Category::where('is_active', true)->get();
        $category_id = $req->cat_id;
        return view('vendor.pages.participated-events-reports', compact('categories', 'participatedEvents', 'category_id'));
    }
}
