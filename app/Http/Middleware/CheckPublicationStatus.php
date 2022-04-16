<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPublicationStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty(auth()->user()) && auth()->user()->status == '1') {
                return $next($request);
        }
        else if(empty(auth()->user()))
        {
            return redirect('login');
        }

        return response("Your Account Inactive, Please Contact With Admin For active your account. Your account inactive due to some issues.");
    }
}
