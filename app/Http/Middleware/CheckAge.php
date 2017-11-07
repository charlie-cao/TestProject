<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$param = 'no param')
    {
//        if ($request->age <= 200) {
//            return redirect('home');
//        }
        echo "midW".$param;
//        dd($request);
        echo $request->route()->getActionName();

        //$response
        return $next($request);
    }
    public function terminate($request, $response)
    {
        // Store the session data...
        echo "midEnd";
    }
}
