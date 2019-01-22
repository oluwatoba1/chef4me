<?php

namespace App\Http\Middleware;

use Closure;

class User
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
        if (auth()->check() && auth()->user()->role == 'customer') {
            return $next($request);
        } elseif (auth()->check() && auth()->user()->role == 'admin') {
            return redirect('admin');
        } elseif (auth()->check() && auth()->user()->role == 'chef') {
            return redirect('chef');
        } else {
            return redirect('lol');
        }
    }
}
