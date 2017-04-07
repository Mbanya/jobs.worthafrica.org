<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
class RegisterController extends Controller
{
   public function showRegister()
   {
       return view('auth.register');
   }
   public function postRegister(Request $request){
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
                'error'=>'There was a problem registering your account.'
            ]);
        }

   }
   public function showOrgRegister(){
       return view('auth.organisation_register');
   }
   public function showSignUp(){
       return view('auth.sign-up');
   }
   public function postOrgRegister( Request $request){
       $user=Sentinel::register($request->all());
       $activation =Activation::create($user);
       $role= Sentinel::findRoleById(2);
       $role->users()->attach($user);
       $this->sendEmail($user,$activation->code);
       return redirect('/login');
   }

   private function sendEmail($user, $code){

       Mail::send('emails.activation',[

           'user'=>$user,
           'code'=>$code
       ], function ($message) use ($user){
           $message->to($user->email);
           $message->subject("Hello $user->first_name, activate your account.");
       });
   }
}
