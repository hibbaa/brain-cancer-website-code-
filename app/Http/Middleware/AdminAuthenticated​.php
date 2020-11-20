<?php
namespace App\Http\Middleware;

use Auth;
use Closure;

class AdminAuthenticated
{
    public function handle($request, Closure $next)
    {
      
            // if user is not admin take him to his dashboard
            if (Auth::user()->usertype == 'admin')
             {
                return $next($request);

            }

            // allow admin to proceed with request
            else
             
            {
           
                redirect('/home');
            }
     }
}

   