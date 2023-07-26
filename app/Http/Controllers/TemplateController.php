<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use App\Models\SMSTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{

    public function emailTemplate()
    {
        $et = null;
        return view('admin.pages.settings.mail.template.create', compact('et'));
    }

    public function emailTemplateList()
    {
        $templates = EmailTemplate::where('user_id', Auth::user()->id)->get();
        return view('admin.pages.settings.mail.template.list', compact('templates'));
    }
    public function emailTemplateStore(Request $req)
    {
        // dd($req->all());
        $et = EmailTemplate::create(array_merge($req->all(), ['user_id' => Auth()->user()->id]));

        if ($et instanceof EmailTemplate) {
            return redirect()->route('template.email.list')->with('success', 'Template created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    function emailTemplateEdit($id)
    {
        $template = EmailTemplate::find($id);
        return view('admin.pages.settings.mail.template.edit', compact('template'));
    }

    function  emailTemplateUpdate(Request $req)
    {
        $et = EmailTemplate::find($req->id)->update($req->all());

        if ($et) {
            return redirect()->route('template.email.list')->with('success', 'Template updated successfully');
        }
    }




    public function smsTemplate()
    {
        return view('admin.pages.settings.sms.template.create');
    }
    public function smsTemplateStore(Request $req)
    {
        dd($req->all());
    }
    public function smsTemplateList()
    {
        $et = EmailTemplate::where('user_id', Auth::user()->id)->first();
        return view('admin.pages.settings.sms.template.list', compact('et'));
    }

    function smsTemplateEdit($id)
    {
        $template = SMSTemplate::find($id);
        return view('admin.pages.settings.mail.template.edit', compact('template'));
    }

    function  smsTemplateUpdate(Request $req)
    {
        $et = SMSTemplate::find($req->id)->update($req->all());

        if ($et) {
            return redirect()->route('template.email.list')->with('success', 'Template updated successfully');
        }
    }
}
