<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function redirect;
use function route;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use function view;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function showJobFilterLogin()
    {
        return view('auth.login1');
    }

    public function postLogin(Request $request)
    {

        try {
            $rememberMe = false;
            if (isset($request->remember_me)) {
                $rememberMe = true;
            }
            if (Sentinel::authenticate($request->all(), $rememberMe)) {
               if ($user =Sentinel::getUser()){
                   if ($user->inRole('individual')){
                       return redirect(route('dashboard.index'));

                   }elseif ($user->inRole('organisation')){
                       return redirect(route('dashboard.index'));
                   }elseif ($user->inRole('jobfilter')){
                       return redirect(route('dashboard.index'));
                   }
               }

            } else {
                return redirect()->back()->with([
                    'error' => 'Wrong Credentials.'
                ]);
            }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with([
                'error' => "You are banned for". $delay ."seconds"
            ]);

        } catch (NotActivatedException $e) {
            return redirect()->back()->with([
                'error' => 'Your Account is not activated '
            ]);
        }
        return redirect()>back();
    }
    public function jflogin(Request $request)
    {
        try {
            if (Sentinel::authenticate($request->all())) {
                if ($user = Sentinel::getUser()) {
                    if ($user->inRole('individual')) {
                        return redirect(route('dashboard.index'));

                    } elseif ($user->inRole('organisation')) {
                        return redirect(route('dashboard.index'));
                    }elseif ($user->inRole('jobfilter')){
                        return redirect(route('dashboard.index'));
                    }
                }

            } else {
                return redirect()->back()->with([
                    'error' => 'Wrong Credentials.'
                ]);
            }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with([
                'error' => "You are banned for". $delay ."seconds"
            ]);

        } catch (NotActivatedException $e) {
            return redirect()->back()->with([
                'error' => 'Your Account is not activated '
            ]);
        }
        return redirect() > back();
    }
    public function postJobFilterLogin(Request $request)
    {
        try {
            if (Sentinel::authenticate($request->all())) {
                if ($user = Sentinel::getUser()) {
                    if ($user->inRole('jobfilter')) {
                        return redirect(route('dashboard.index'));
                    }elseif ($user->inRole('organisation')){
                        return redirect(route('login'))->with(['message'=>'Your Account is not cleared to access this page']);
                    }elseif ($user->inRole('individual')){
                        return redirect(route('login'))->with(['message'=>'Your Account is not cleared to access this page']);
                    }
                    else {
                        return redirect()->back()->with([
                            'error' => 'Wrong Credentials.'
                        ]);
                    }
                }
            }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with([
                'error' => "You are banned for". $delay ."seconds"
            ]);

        } catch (NotActivatedException $e) {
            return redirect()->back()->with([
                'error' => 'Your Account is not activated '
            ]);
        }
        return redirect() > back();
    }



    public function logout(){

        Sentinel::logout();

        return redirect('/login')->with(['message'=>'Successfully Logged Out']);
    }
}
