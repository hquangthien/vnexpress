<?php

namespace App\Http\Controllers\VnExpress;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;
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

    public function postContact(ContactRequest $request)
    {
        $data = [
            'name' => $request->name,
            'mail' => $request->mail,
            'subject' => $request->subject,
            'content' => $request->detail,
        ];

        $objContact = new Contact();
        $objContact->create($data);

        $subject = $request->subject;
        Mail::send('vnexpress.contact.blank', $data, function ($msg) use ($request){
            $msg->from($request->mail, $request->name);
            $msg->to('hquangthien.it@gmail.com', 'Hoàng Quang Thiên')->subject($request->subject);
        });
        return redirect()->route('vnexpress.page.contact')->with('msg', 'Gửi thành công');
    }
}
