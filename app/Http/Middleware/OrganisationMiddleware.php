<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class OrganisationMiddleware
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
        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->id=='2')
        return $next($request);
        else
            return redirect('login')->with('status','Kindly login in to continue');
    }
}
