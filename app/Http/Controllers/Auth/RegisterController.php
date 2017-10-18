<?php

namespace App\Http\Controllers\Auth;

use App\Feedback;
use function compact;
use Illuminate\Http\Request;
use function redirect;
use Sentinel;
use Activation;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use function view;

class RegisterController extends Controller
{
   public function showRegister()
   {
       return view('auth.register');
   }
   public function postRegister(Request $request){

       $this->validate($request,[
           'first_name' => 'required|max:255',
           'last_name'=> 'required|max:255',
           'email'=>'email|unique:users',
           'phone_number'=>'required',
           'password'=>'required|between:6,25|confirmed'
           ]);
        try{
            $user =Sentinel::register($request->all());
            $activation =Activation::create($user);
            $role = Sentinel::findRoleById(1);
            $role->users()->attach($user);
            $this->sendEmail($user, $activation->code);
            return redirect('/login')->with([
                'message'=>'Check email to activate account']);
        }catch (QueryException $queryException){
                $errors = $queryException->getBindings();
            return redirect()->back()->with([
                'error'=>'Problems Registering your Account'
            ]);

        }
   }
   public function showOrgRegister(){
       return view('auth.organisation_register');
   }
   public function postOrgRegister( Request $request){
    try{
           $user=Sentinel::register($request->all());
           $activation =Activation::create($user);
           $role= Sentinel::findRoleById(2);
           $role->users()->attach($user);
           $this->sendEmail($user,$activation->code);
           return redirect('/login')->with(['message'=>'Check email to activate account']);
       }catch (QueryException $queryException){
    $errors = $queryException->getBindings();
    return redirect()->back()->with([
    'error'=>'Problems Registering your Account'
    ]);
}
   }

   public function showJobFilterRegister(){
       return view('auth.jobfilter_register');
   }

   public function postJobFilterRegister(Request $request){

       $this->validate($request,[
          'hires'=>'required',
          'avg_time'=>'required',
          'avg_cvs'=>'required'
       ]);

       try{
           $user = Sentinel::register($request->all());
           $activation = Activation::create($user);
           $role = Sentinel::findRoleById(3);
           $role->users()->attach($user);
           $this->HREmail($user,$activation->code);

           $feedback = new Feedback(array(
               'hires'=>$request->get('hires'),
               'avg_time'=>$request->get('avg_time'),
               'avg_cvs'=>$request->get('avg_cvs'),

           ));
           $feedback->user()->associate($user);
           $feedback->save();
            return redirect('/filter_login')->with(['message'=>'Check email to activate account']);
       }catch (QueryException $queryException){
           $errors = $queryException->getBindings();
           return redirect()->back()->with(['error'=>'There were Problems Registering your account. Try Again later']);
       }


   }

   private function sendEmail($user, $code){

       Mail::send('emails.activation',[

           'user'=>$user,
           'code'=>$code
       ], function ($message) use ($user){
           $message->to($user->email);
           $message->subject("Hello $user->email, activate your account.");
       });
   }

   private function HREmail($user, $code){
       Mail::send('emails.jobfilter',[

           'user'=>$user,
           'code'=>$code
       ],function ($message) use ($user){
           $message->to($user->email);
           $message->subject("Hello $user->organisation_name, activate your account");
       });


   }
}
