<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SeekerController extends Controller
{
    public function home(){
        return view('pages.job-seeker');
    }
    public function mock(){
        return view('pages.mock');
    }

    public function post( ){
        $service =  Input::get('service');
        $industry = Input::get('job_type');
        $location = Input::get('location');

        if ($service == 'FlexTalent'){
             return redirect(route('flexjobs.create'))->with(compact('industry'&&'location'));
        }elseif ($service == 'PermanentJob'){
             return redirect(route('jobs.create'))->with(compact('industry'&&'location'));
        }
        return redirect()->back()->with(['message'=>'Kindly provide us with values in the input boxes below']);
    }
}
