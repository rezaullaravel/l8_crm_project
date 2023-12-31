<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
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
                if(Auth::user()->role=='1') //1 for admin, 2 for employee, 0 for normal user
                {
                    // return $next($request);
                    return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                    ->header('Pragma','no-cache')
                    ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');

                } elseif(Auth::user()->role=='2'){
                    return redirect('/employee/dashboard');
                } else

                {
                    return redirect('/home');
                }
                } else
        {
            return redirect('/login');
        }
    }//end method
}
