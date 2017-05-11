<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Users\UserInterface;
use Illuminate\Http\Request;
use Activation;
Use App\User;
use Sentinel;

class ActivationController extends Controller
{
  public function activate ($email,$activationCode)
  {
      $user= User:: whereEmail($email)->first();
      $sentinelUser =Sentinel::findById($user->id);

      if (Activation::complete($sentinelUser,$activationCode)){
            return redirect('/login')->with(['message'=>'Your Account has been Activated.']);
        }else{

          return redirect('/login')->with(['error_activate'=>'Your Account was not activated kindly check your email to activate it.']);
        }
  }
}
