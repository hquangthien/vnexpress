<?php

namespace App\Http\Controllers\VnExpress;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function about()
    {
        return view('vnexpress.contact.about');
    }

    public function getContact()
    {
        return view('vnexpress.contact.contact');
    }

    public function postContact(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'detail' => $request->detail,
        ];
        $subject = $request->subject;
        Mail::send('vnexpress.contact.blank', $data, function ($msg) use ($request){
            $msg->from($request->email, $request->name);
            $msg->to('hquangthien1@gmail.com', 'Hoàng Quang Thiên')->subject($request->subject);
        });
    }
}
