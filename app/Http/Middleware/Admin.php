<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(auth()->check() && auth()->user()->role == 'admin'){
            return $next($request);
        }
        elseif(auth()->check() && auth()->user()->role == 'chef'){
            return redirect('chef');
        }
        elseif(auth()->check() && auth()->user()->role == 'customer'){
            return redirect('customer');
        }
        else{
            return redirect('lol');
        }
    }
}
