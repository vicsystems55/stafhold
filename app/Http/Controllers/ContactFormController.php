<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\IpUtils;

class ContactFormController extends Controller
{
    //

    function post_message(Request $request) {

        //form validation

        $request->validate([
            'email' => 'required|email'
        ]);

        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('status', 'Please Complete the Recaptcha to proceed');
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' =>  $request->message,
            ];

            //send email to admin

            Mail::to('victorasuquob@gmail.com')->send(new ContactFormMail($data));

            // Mail::to('kay@stafhold.com')->send(new ContactFormMail($data));


            // THANKS FOR WATCHING

            return back()->with('msg', 'Thanks for reaching out. Your message has been sent successfully.');

        } else {
            return redirect()->back()->with('status', 'Please Complete the Recaptcha Again to proceed');
        }


    }
}
