<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

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
    function closedEvent()
    {
        return view('admin.pages.report.closed-event');
    }
    function decisionTaken()
    {
        return view('admin.pages.report.decision-taken');
    }
}
