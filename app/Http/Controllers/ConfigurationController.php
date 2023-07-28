<?php

namespace App\Http\Controllers;

use App\Models\EmailConfiguration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function smsConfiguration()
    {
        return view('admin.pages.settings.sms.configuration.create');
    }
    public function smsConfigurationStore(Request $req)
    {
        dd($req->all());
    }
    public function emailConfiguration()
    {
        $emailConfig = null;
        return view('admin.pages.settings.mail.configuration.create', compact('emailConfig'));
    }


    public function emailConfigurationList()
    {
        return view('admin.pages.settings.mail.configuration.list');
    }
    public function emailConfigurationStore(Request $req)
    {
        return redirect()->route('config.mail.list')->with('warning', 'This seciton is under development , please come back after some time');
        // dd($req->all());
    }

    function emailConfigurationEdit($id)
    {
        $emailConfig = EmailConfiguration::find($id);
        return view('admin.pages.settings.mail.configuration.edit', compact('emailConfig'));
    }

    function emailConfigurationUpdate()
    {
    }
}
