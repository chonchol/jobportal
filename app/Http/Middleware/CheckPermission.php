<?php 
namespace App\Http\Middleware;

use Closure;
use \Auth;
use User;
class CheckPermission
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
        if (Auth::user()->userType != 'Admin')
        {
           return response()->view('404', [], 404);
        }

        return $next($request);
    }
}
