<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function index(){
        $objContact = $this->contact->getAllContact();
        return view('admin.contact.index', ['objContact' => $objContact]);
    }

    public function show($id)
    {
        $objContact = $this->contact->find($id);
        $objContact->readed = 1;
        $objContact->save();
        return view('admin.contact.edit', ['objContact' => $objContact]);
    }

    public function delete($id)
    {
        if ($this->contact->destroy($id)){
            return redirect()->route('admin.contact.index')->with('msg', 'Xóa thành công');
        } else{
            return redirect()->route('admin.contact.index')->with('msg', 'Xóa thất bại');
        }
    }

    public function postContact(ContactRequest $request)
    {
        $data = [
            'name' => $request->name,
            'mail' => $request->mail,
            'subject' => $request->subject,
            'content' => $request->detail,
        ];

        $subject = $request->subject;
        Mail::send('admin.contact.blank', $data, function ($msg) use ($request){
            $msg->from($request->mail, $request->name);
            $msg->to($request->mail, $request->name)->subject($request->subject);
        });
        return redirect()->route('contact.index')->with('msg', 'Gửi thành công');
    }
}
