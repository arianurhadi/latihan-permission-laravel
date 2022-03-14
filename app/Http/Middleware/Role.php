<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

        if (! $request->user()->hasRole($role)) {
            return abort(404);
        }

        // if ($request->user()->role == 'admin') {
        //     return redirect()->route('dashboard.admin');
        // }

        // if ($request->user()->role == 'student') {
        //     return redirect()->route('dashboard.student');
        // }

        return $next($request);
    }
}
