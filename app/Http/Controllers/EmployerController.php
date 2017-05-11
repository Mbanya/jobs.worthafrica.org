<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EmployerController extends Controller

{

    public function home(){
        return view('pages.employer');
    }

    public function post( ){
        $service =  Input::get('service');
        $industry = Input::get('job_type');
        $location = Input::get('location');

        if ($service == 'flex_hire'){
            return redirect(route('flexhire.create'))->with(compact('industry','location'));
        }elseif ($service == 'permanent_hire'){
            return redirect(route('hire.create'))->with(compact('industry','location'));
        }
    }

}
