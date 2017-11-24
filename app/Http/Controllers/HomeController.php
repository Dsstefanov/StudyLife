<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function activities(){
        return view('activities');
    }
    public function members(){
        return view('member');
    }
    public function contact(){
        return view('contact');
    }
}
