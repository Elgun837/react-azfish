<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiLocaleChecker
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
        
        $locales = array_values( config('voyager.multilingual.locales') );

        if(in_array($request->header('apiLocale'), $locales)) 
            app()->setLocale($request->header('apiLocale'));
        else 
            app()->setLocale('en');

        return $next($request);
    }
}
