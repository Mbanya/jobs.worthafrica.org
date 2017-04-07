<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultHubController extends Controller
{
    public function home(){
        return view('pages.consultancy');
    }

}
