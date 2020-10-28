<?php

namespace App\Http\Middleware;

use Closure;

use Auth;


class CheckRole
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
            $User = Auth::user()->role->title;
            switch($User)
            {
                case 'Customer':
                     return redirect()->route('customer-dashbaord');
                break;

                case 'Employee':
                     return redirect()->route('employee-dashbaord');
                break;

                case 'Support Staff':
                     return redirect()->route('staff-dashbaord');
                break;

                case 'Accountants':
                     return redirect()->route('accountant-dashbaord');
                break;
                
                default:
                     return redirect('/');
                break;
            }
            return $next($request);
    }
}
