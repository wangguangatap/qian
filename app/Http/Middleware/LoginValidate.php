<?php

namespace App\Http\Middleware;

use Closure;

class LoginValidate
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
        if(!session('loginManagerInfo')['id']){
            return redirect('admin/login');
        }
        return $next($request);
    }
}
