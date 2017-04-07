<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Activation;
class ActivationController extends Controller
{
  public function activate ($email,$activationCode)
  {
      $user= User:: whereEmail($email)->first();

      if (Activation::complete($user,$activationCode)){
            return redirect('auth.login')->with(['message'=>'Your Account has been Activated.']);
        }else{

          return redirect('auth.login')->with(['error_activate'=>'Your Account was not activated kindly check your email to activate it.']);
        }
  }
}
