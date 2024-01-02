<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppUdateController extends Controller
{
    //

    public function updateapp(Request $request){

        $output = shell_exec('git pull');

        return back()->with('msg', 'Application Updated');
    }
}
