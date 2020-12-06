<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $nextn
     * @return mixed
     */
    /* 글로벌 미들웨어
     public function handle($request, Closure $next)
     {
         if($request->age && $request->age<18)
         {
             return redirect('noaccess');
         }
         return $next($request);
     }

 }*/
    public function handle($request, Closure $next)
    {
        if ($request->age && $request->age < 18) {
            return redirect('noaccess');
        }
        return $next($request);
    }
}
