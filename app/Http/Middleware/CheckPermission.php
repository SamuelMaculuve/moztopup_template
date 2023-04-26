<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
        if($request->user()){

            $user_permissions = $request->user()->permissions;

            $user_permissions = explode(",", $user_permissions);

            $permission = explode('|', $permission);

            foreach ($permission as $per) {

                if(in_array($per, $user_permissions))
                {
                    return $next($request);
                }
            }
        }

        return response()->view('admin.layout.access_deny');

    }
}
