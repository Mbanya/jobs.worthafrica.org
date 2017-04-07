<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeekerController extends Controller
{
    public function home(){
        return view('pages.job-seeker');
    }
}
