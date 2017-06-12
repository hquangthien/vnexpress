<?php

namespace App\Http\Controllers\VnExpress;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function error($status)
    {
        switch ($status){
            case '404':
                return view('vnexpress.error.error404');
                break;
            case '505':
                return view('vnexpress.error.error505');
                break;
            case '401':
                return view('vnexpress.error.error401');
        }


    }
}
