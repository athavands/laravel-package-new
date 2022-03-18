<?php

namespace Athavands\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Athavands\Contact\Mail\COntactMailable;
use Athavands\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new COntactMailable($request->message,$request->name));
       Contact::create($request->all());
       return redirect(route('contact'));
    }
}
