<?php

namespace App\Http\Controllers;

use App\Exports\ClosedEventConsolidateReport;
use App\Exports\ClosedEventL1Report;
use App\Exports\DecisionTakenEventConsolidateReport;
use App\Exports\DecisionTakenEventL1Report;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
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

        if ($r->cat_id) {
            $events =  Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id, 'category_id' => $r->cat_id])->get();
        } else {
            $events = Event::where(['status' => EVENT_STATUS[2], 'company_id' => $this->company_id])->get();
        }

        $catId = $r->cat_id;
        $fromDate = $r->closedFromDate;
        $toDate = $r->closedToDate;

        return view('admin.pages.report.closed-event', compact('events', 'categories', 'catId', 'categories', 'fromDate',  'toDate'));
    }
    function decisionTaken()
    {
        return view('admin.pages.report.decision-taken');
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
}
