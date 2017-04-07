<?php

namespace App\Http\Middleware;
use Sentinel;
use Closure;

class IndividualMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Check if user is Authenticated

        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->id =='1')
        return $next($request);
        else
            return redirect()->back();

    }
}
