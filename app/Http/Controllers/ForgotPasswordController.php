<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Reminder;
use Mail;

class ForgotPasswordController extends Controller
{
    public function Forgotpassword (){
        return view('auth.passwords.email');

    }
    public function  postForgotpassword (Request $request){
        $user =User:: whereEmail($request->email)->first();

        $sentinelUser =Sentinel::findById($user->id);

        if (count($user)==0){
            return redirect()->back()->with([
                'success'=>'Reset code was sent to your email address'
            ]);
        }

        $reminder = Reminder::exists($sentinelUser) ? :Reminder::create($sentinelUser);
        $this->sendEmail($user,$reminder->code);
        return redirect()->back()->with([
            'success'=>'Reset code was sent to your email address'
        ]);
    }
    public function resetPassword(){

    }
    private function sendEmail($user, $code){

        Mail::send('emails.reset',[

            'user'=>$user,
            'code'=>$code
        ], function ($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello $user->first_name, reset your password.");
        });
    }
}
