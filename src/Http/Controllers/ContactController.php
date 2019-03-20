<?php

namespace Wanka\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Wanka\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Wanka\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
		return view('contact::index');
    }

    public function sendMail(Request $request)
    {
    	Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->name,$request->message));
    	Contact::create($request->all());
    	return redirect(route('contact'));
    }
}
