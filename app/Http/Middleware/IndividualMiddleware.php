<?php

namespace App\Http\Middleware;
use Sentinel;
use Closure;

class IndividualMiddleware
{
    /**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request $request
 * @param  \Closure $next
 * @return mixed
 */
    public function handle($request, Closure $next)
    {
        //Check if user is Authenticated

        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->id == '1') {
            return $next($request);
        } elseif (Sentinel::check() && Sentinel::getUser()->roles()->first()->id == '2') {
            return redirect('/login')->with('status', 'Your Account is not cleared to access this page.');
        } else {
            return redirect('/login')->with('status', 'Kindly login in to continue');

        }
    }

}