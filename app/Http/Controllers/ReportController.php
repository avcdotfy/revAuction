<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    function runningEvent()
    {
        return view('admin.pages.report.running-event');
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
