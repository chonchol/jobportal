<?php 
namespace App\Http\Middleware;

use Closure;
use Auth;
use Route;
use DB;
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
        return $next($request);
        $route = Route::getRoutes()->match($request);
        $routeName=$route->getPath();
        $method=$request->getMethod();
        if(Auth::check()){
            $userType = Auth::user()->userType;
        }else{
            $userType = 'Public';
        }
        $permission = DB::table('permissions')
                        ->leftJoin('actions','permissions.action_id', '=', 'actions.id')
                        ->leftJoin('roles', 'permissions.role_id', '=', 'roles.id')
                        ->where('actions.method',$method)
                        ->where('actions.uri', $routeName)
                        ->where('roles.role', $userType)
                        ->first();
        if($permission AND $permission->allow == 1){
            return $next($request);
        }else{
            return response()->view('404', [], 404);
        }

    }
}
