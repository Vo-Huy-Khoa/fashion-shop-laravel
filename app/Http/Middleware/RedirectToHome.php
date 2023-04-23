<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToHome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if ($request->is('/') && !$request->isMethod('post')) {
            return redirect('/home');
        }

        return $next($request);
    }

}
