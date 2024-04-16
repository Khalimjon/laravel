<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        dd('duck');
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function projects(){
        return view('projects');
    }

    public function blog()  {
        return view('latest-blog');
    }
    public function blogDetails()  {
        return view('blog-details');
    }

    public function contact()  {
        return view('contact');
    }
}
