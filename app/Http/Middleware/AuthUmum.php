<?php

namespace App\Http\Middleware;

use Closure;

class AuthUmum
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
        $user = auth()->user();

        if(!$user->isUmum()){
            return redirect()->back();
        }
        return $next($request);
    }
}
