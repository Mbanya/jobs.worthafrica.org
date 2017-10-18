<?php

namespace App\Http\Controllers;
use function compact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use function redirect;
use function route;

class EmployerController extends Controller

{

    public function home(){
        return view('pages.employer');
    }

    public function post(Request $request ){
        $service =  Input::get('service');
        $industry = $request->get('job_type');
        $location = $request->get('location');

        if ($service == 'flex_hire'){
            return redirect(route('flexhire.create'))->with(compact('industry','location'));
        }elseif ($service == 'permanent_hire'){
            return redirect(route('hire.create'))->with(compact('industry','location'));
        }elseif ($service == 'TOR'){
            return redirect(route('tor.create'))->with(compact('industry','location'));
        }
    }

}
