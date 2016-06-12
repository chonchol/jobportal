<?php

namespace App\Http\Middleware;

use App\User;
use App\Profile;
use \Auth;
use Closure;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next){


    if (Auth::attempt(array('userStatus' => 'Active'))){
    // The user is active, not suspended, and exists.
        abort(403, 'not authorised');
    }

        return $next($request);
    }
}
