<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Customer1
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
        if(Auth::user()->role->title != 'Customer')
        {
           return redirect()->route('login');
        }
        return $next($request);
    }
}
