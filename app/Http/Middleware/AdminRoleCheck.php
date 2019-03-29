<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminRoleCheck
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
        if(Auth::user()->roles[0]->role_name =='admin'){
         return $next($request);   
        }
        
        return redirect('my-admin/dashboard');
    }
}
