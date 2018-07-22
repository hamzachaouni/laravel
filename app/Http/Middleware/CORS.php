<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        return $next($request)
        ->header("Access-Control-Allow-Origin","*")
        ->header('Access-Control-Allow-Headers', 'Content-type, X-Auth-Token, Authorization, Origin, x-xsrf-token, x_csrftoken, X-Requested-With')
        ->header('Allow', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        /*header('Access-Control-Allow-Origin : *');
        header('Access-Control-Allow-Headers : Content-type, X-Auth-Token, Authorization, Origin, x-xsrf-token, x_csrftoken, X-Requested-With');
        return $next($request);*/
    }
}
