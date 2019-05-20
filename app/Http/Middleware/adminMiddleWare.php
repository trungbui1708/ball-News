<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class adminMiddleWare
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

        if (Auth::check()) 
        {
           $user =Auth::User();
           if($user->level==0)
           return $next($request);
           else return redirect('dangnhap');
        }
        else return redirect('dangnhap');
        
    }
}
