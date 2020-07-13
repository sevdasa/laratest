<?php

namespace App\Http\Middleware;

use Closure;

class check_client_panel
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
        if(auth()->user()->level=='client'){
            return $next($request);

        }else{
            abort('403');
        }    }
}
