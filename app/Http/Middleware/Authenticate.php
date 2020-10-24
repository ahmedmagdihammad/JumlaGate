<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Authenticate
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
        if(Auth::check() == true){
            if(Auth::user()->type == "A") {
                return $next($request);
            }else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }
}