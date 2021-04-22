<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('layouts.contactform');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('layouts.contactMail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('kabulova157@gmail.com', 'Hello Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Ваше сообщение отправлено. Спасибо!');
    }
}