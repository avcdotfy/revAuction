<?php

namespace App\Http\Controllers;

use App\Exports\ClosedEventConsolidateReport;
use App\Exports\ClosedEventL1Report;
use App\Exports\DecisionTakenEventConsolidateReport;
use App\Exports\DecisionTakenEventL1Report;
use App\Exports\ParticipatedEventReports;
use App\Exports\ParticipatedEventStatusReports;
use App\Exports\ParticipateEventStatusReport;
use App\Models\Bid;
use App\Models\Category;
use App\Models\Event;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends BaseController
{
    function runningEvent(Request $r)
    {
        $categories = Category::all();
        if ($r->cat_id) {
            $events =  Event::where(['status' => EVENT_STATUS[1], 'company_id' => $this->company_id, 'category_id' => $r->cat_id])->get();
        } else {
            $events = Event::where(['status' => EVENT_STATUS[1], 'company_id' => $this->company_id])->get();
        }
        $catId = $r->cat_id;
        return view('admin.pages.report.running-event', compact('events', 'categories', 'catId'));
    }
    function closedEvent(Request $r)
    {
        $categories = Category::all();

        $fromDateMillis = null;
        $toDateMillis = null;

        if ($r->fromdate) {
            $fromDateMillis = Carbon::createFromFormat('Y-m-d', $r->fromdate)->timestamp * 1000;
        }
        if ($r->todate) {
            $toDateMillis = Carbon::createFromFormat('Y-m-d', $r->todate)->timestamp * 1000;
        }
        // dd($r->cat_id);
        if ($r->cat_id) {
            $events =  Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id, 'category_id' => $r->cat_id])->where(function ($query) use ($fromDateMillis, $toDateMillis) {
                if ($fromDateMillis && $toDateMillis) {
                    $query->whereBetween('closing_date_time_millis', [$fromDateMillis, $toDateMillis]);
                } elseif ($fromDateMillis) {
                    $query->where('closing_date_time_millis', '>=', $fromDateMillis);
                } elseif ($toDateMillis) {
                    $query->where('closing_date_time_millis', '<=', $toDateMillis);
                }
            })->get();
        } else {
            $events = Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id])->where(function ($query) use ($fromDateMillis, $toDateMillis) {
                if ($fromDateMillis && $toDateMillis) {
                    $query->whereBetween('closing_date_time_millis', [$fromDateMillis, $toDateMillis]);
                } elseif ($fromDateMillis) {
                    $query->where('closing_date_time_millis', '>=', $fromDateMillis);
                } elseif ($toDateMillis) {
                    $query->where('closing_date_time_millis', '<=', $toDateMillis);
                }
            })->get();
        }

        $catId = $r->cat_id;
        $fromDate = $r->closedFromDate;
        $toDate = $r->closedToDate;

        return view('admin.pages.report.closed-event', compact('events', 'categories', 'catId', 'categories', 'fromDate',  'toDate'));
    }
    function decisionTaken(Request $r)
    {
        $categories = Category::all();

        $fromDateMillis = null;
        $toDateMillis = null;

        if ($r->fromdate) {
            $fromDateMillis = Carbon::createFromFormat('Y-m-d', $r->fromdate)->timestamp * 1000;
        }
        if ($r->todate) {
            $toDateMillis = Carbon::createFromFormat('Y-m-d', $r->todate)->timestamp * 1000;
        }
        // dd($r->cat_id);
        if ($r->cat_id) {
            $events =  Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id, 'category_id' => $r->cat_id])->where(function ($query) use ($fromDateMillis, $toDateMillis) {
                if ($fromDateMillis && $toDateMillis) {
                    $query->whereBetween('closing_date_time_millis', [$fromDateMillis, $toDateMillis]);
                } elseif ($fromDateMillis) {
                    $query->where('closing_date_time_millis', '>=', $fromDateMillis);
                } elseif ($toDateMillis) {
                    $query->where('closing_date_time_millis', '<=', $toDateMillis);
                }
            })->get();
        } else {
            $events = Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id])->where(function ($query) use ($fromDateMillis, $toDateMillis) {
                if ($fromDateMillis && $toDateMillis) {
                    $query->whereBetween('closing_date_time_millis', [$fromDateMillis, $toDateMillis]);
                } elseif ($fromDateMillis) {
                    $query->where('closing_date_time_millis', '>=', $fromDateMillis);
                } elseif ($toDateMillis) {
                    $query->where('closing_date_time_millis', '<=', $toDateMillis);
                }
            })->get();
        }

        $catId = $r->cat_id;
        $fromDate = $r->closedFromDate;
        $toDate = $r->closedToDate;

        $bids = Bid::groupBy('event_id')->where('decision_status', 'Accepted')->get();
        return view('admin.pages.report.decision-taken', compact('bids', 'categories', 'catId', 'categories', 'fromDate',  'toDate'));
    }


    //////////////////////////////////////////// Report Making ///////////////////////////////////////////////

    function closedEvenL1Report($eId)
    {
        return Excel::download(new ClosedEventL1Report($eId), EVENT_ID_PREFIX . $eId . '_EVENT_L1_REPORT_WD_.xlsx');
    }

    function closedEventConsolidateReport($eId)
    {
        return Excel::download(new ClosedEventConsolidateReport($eId), EVENT_ID_PREFIX . $eId . '_EVENT_REPORT_WD_.xlsx');
    }

    function decisionTakenEventConsolidateReport($eId)
    {
        return Excel::download(new DecisionTakenEventConsolidateReport($eId), EVENT_ID_PREFIX . $eId . '_DECISION_TAKEN_EVENT_REPORT_WD_.xlsx');
    }

    function decisionTakenEvenL1Report($eId)
    {
        return Excel::download(new DecisionTakenEventL1Report($eId), EVENT_ID_PREFIX . $eId . '_DECISION_TAKEN_EVENT_L1_REPORT_WD_.xlsx');
    }

    ///////////////////////////////////////////////// Vendor Side Reports  //////////////////////////////////////////////////


    function participatedEventReports($eId)
    {
        return Excel::download(new ParticipatedEventReports($eId), EVENT_ID_PREFIX . $eId . '_PARTICIPATED_EVENT_REPORT.xlsx');
    }
    function participatedEventStatusReports($eId)
    {
        return Excel::download(new ParticipateEventStatusReport($eId), EVENT_ID_PREFIX . $eId . '_PARTICIPATED_EVENT_STATUS_REPORT.xlsx');
    }
}
