<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function smsTemplate()
    {
        return view('admin.pages.settings.sms.template.create');
    }
    public function smsTemplateStore(Request $req)
    {
        dd($req->all());
    }
    public function emailTemplate()
    {
        $et = EmailTemplate::where('user_id', Auth::user()->id)->first();
        return view('admin.pages.settings.mail.template.create', compact('et'));
    }
    public function smsTemplateList()
    {
        $et = EmailTemplate::where('user_id', Auth::user()->id)->first();
        return view('admin.pages.settings.sms.template.list', compact('et'));
    }
    public function emailTemplateList()
    {
        $et = EmailTemplate::where('user_id', Auth::user()->id)->first();
        return view('admin.pages.settings.mail.template.list', compact('et'));
    }
    public function emailTemplateStore(Request $req)
    {
        // dd($req->all());

        if ($req->id) {
            $et = EmailTemplate::find($req->id)->update($req->all());
        } else {
            $et = EmailTemplate::create(array_merge($req->all(), ['user_id' => Auth()->user()->id]));
        }

        // dd($et);

        if ($et instanceof EmailTemplate) {
            return redirect()->back()->with('success', 'Template created successfully');
        } else if ($et == true) {
            return redirect()->back()->with('success', 'Template updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
