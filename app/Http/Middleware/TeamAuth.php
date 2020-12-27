<?php

namespace App\Http\Middleware;

use Closure;

class TeamAuth
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
        // $auth = Auth::guard($guard);
        $team = $request->user();
        if(preg_match("/^(binusian|non\-binusian)$/i", $team->type)){
            return $next($request);
        }

        return redirect("/dashboard");
    }
}
