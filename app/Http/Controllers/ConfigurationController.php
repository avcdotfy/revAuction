<?php

namespace App\Http\Controllers;

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
        return view('admin.pages.settings.mail.configuration.create');
    }


    public function emailConfigurationList()
    {
        return view('admin.pages.settings.mail.configuration.list');
    }
    public function emailConfigurationStore(Request $req)
    {
        dd($req->all());
    }
}
