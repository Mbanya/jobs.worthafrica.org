<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function account(){
        return view('pages.account');
    }
    public function pricing(){
        return view('pages.pricing');
    }
    public function hire(){
        return view('forms.employers.hire');
    }
    public function organisation(){
        return view('pages.organisation');
    }
    public function seeker(){
        return view('pages.seeker');
    }
    public function medics(){
        return view('pages.medics');
    }
    public function hire_medic(){
        return view('pages.medic_employer');
    }
    public function seeker_medic(){
        return view('pages.medic_job-seeker');
    }

    public function success(){
        return view('success.success');
    }
}
