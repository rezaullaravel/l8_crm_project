<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            if(Auth::user()->role=='0') //1 for admin, 2 for employee, 0 for normal user
            {
                return $next($request);

            } elseif(Auth::user()->role=='1'){
                return redirect('/admin/dashboard');
            } else

            {
                return redirect('/employee/dashboard');
            }
            } else
        {
            return redirect('/login');
        }
    }//end method
}
