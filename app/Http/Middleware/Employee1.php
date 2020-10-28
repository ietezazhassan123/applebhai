<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Employee1
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
        if(Auth::user()->role->title != 'Employee')
        {
           return redirect()->route('login');
        }
        return $next($request);
    }
}
