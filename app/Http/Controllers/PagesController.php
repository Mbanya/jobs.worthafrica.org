<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function pricing(){
        return view('pages.pricing');
    }
    public function hire(){
        return view('forms.employers.hire');
    }
    public function success(){
        return view('success.success');
    }
}
