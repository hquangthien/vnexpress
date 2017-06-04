<?php

namespace App\Http\Controllers\VnExpress;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function error()
    {
        return view('vnexpress.error');
    }
}
