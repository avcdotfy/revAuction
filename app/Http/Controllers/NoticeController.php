<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends BaseController
{
    //

    function index()
    {
        $notices = Notice::all();
        return view('admin.pages.noticeNews.list', compact('notices'));
    }
    function create()
    {
        return view('admin.pages.noticeNews.create');
    }
    function store(Request $r)
    {
        $notice = Notice::create([
            'title' => $r->title,
            'msg' => $r->msg,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id
        ]);
        if ($notice instanceof Notice) {
            return redirect()->route('notice.list')->with('success', 'News created successfully');
        } else {
            return redirect()->back()->with('error', 'News creation failed');
        }
    }

    function edit($id)
    {
        $n = Notice::find($id);
        return view('admin.pages.noticeNews.edit', compact('n'));
    }

    function update(Request $r)
    {
        // dd($r->all());
        $notice = Notice::find($r->id)->update([
            'title' => $r->title,
            'msg' => $r->msg,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id
        ]);
        if ($notice) {
            return redirect()->route('notice.list')->with('success', 'News update successfully');
        } else {
            return redirect()->back()->with('error', 'News update failed');
        }
    }
}
