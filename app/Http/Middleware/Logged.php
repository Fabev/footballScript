<?php

namespace App\Http\Middleware;

use Closure;

class Logged
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
        if (!session()->has('logged') or session()->get('logged') != true){
            return redirect()->route('index');
        }
        return $next($request);
    }
}
