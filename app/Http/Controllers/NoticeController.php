<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //

    function index()
    {
        return view('admin.pages.noticeNews.notice-news');
    }
    function create()
    {
    }
    function store()
    {
    }
}
