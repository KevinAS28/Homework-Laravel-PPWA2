<?php

namespace App\Http\Middleware;

use Closure;
// use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next){
        if ((Auth::user()->level) != 'admin'){
            return redirect()->back();
        }
        return $next($request);
    }
}
