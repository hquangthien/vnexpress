<?php

namespace App\Http\Controllers\VnExpress;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function category()
    {
        return view('vnexpress.news.category');
    }

    public function detail()
    {
        return view('vnexpress.news.detail');
    }
}
