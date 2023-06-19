<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //

    function post_message(Request $request) {

        //form validation

        $request->validate([
            'email' => 'required|email'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' =>  $request->message,
        ];

        //send email to admin

        Mail::to('victorasuquob@gmail.com')->send(new ContactFormMail($data));

        Mail::to('kay@stafhold.com')->send(new ContactFormMail($data));


        // THANKS FOR WATCHING

        return back()->with('msg', 'Thanks for reaching out. Your message has been sent successfully.');

    }
}
