<?php

namespace App\Http\Middleware;

use Closure;

class PublicMiddleware
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
        if(\Auth::check()){
            //return response()->view('404', [], 404);
            //echo "ok";
        }
        return $next($request);
    }
}
