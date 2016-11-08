<?php

namespace Learncloud\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
         if( Auth::user()->email != 'solyooo@yahoo.com'){
            
            return redirect('/home/profile');
        }
          
        return $next($request);
    }
}
