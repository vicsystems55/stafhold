<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
