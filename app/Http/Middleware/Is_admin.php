<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Closure; 
=======
use Closure;
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Is_admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
<<<<<<< HEAD
         if(Auth::check() && Auth::user()->role == 'admin'){
=======
        if(Auth::check() && Auth::user()->role == 'admin'){
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
                    return $next($request);

        }
                abort(403, 'Unauthorized - Admins only!');
<<<<<<< HEAD
      
=======

>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    }
}
