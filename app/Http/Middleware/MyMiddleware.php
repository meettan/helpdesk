<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class MyMiddleware
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
        if(isset($user_detail)){
            return $next($request);
        }else{
            return redirect('/'); 
        }
        
    }
}
