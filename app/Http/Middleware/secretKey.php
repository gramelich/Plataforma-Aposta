<?php

namespace App\Http\Middleware;

use Closure;

class secretKey
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
        // Change the SERVER_ADDR for SERVER_NAME
       // if($request->getClientIp() != env("WHITELIST_IP") && $request->getClientIp() != '35.199.57.88')
         //   return response()->json('Invalid Request');

        return $next($request);
    }
}
