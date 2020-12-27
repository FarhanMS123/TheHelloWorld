<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // $auth = Auth::guard("team")->user();
        // print_r($auth);
        // die();
        $team = $request->user();
        if(preg_match("/^admin$/i", $team->type)){
            return $next($request);
        }

        return redirect("/dashboard");
    }
}
