<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckMenu
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRoles = Auth::user()->roles->pluck('name');
        $usermenuwish = Auth::user()->menuwish->pluck('status');
        #dd($usermenuwish);
        if (!$userRoles->contains('admin') or !$userRoles->contains('waiter')) {
            if (!$usermenuwish->contains('Accepted')) {

                return redirect(route('home'))->with('error', 'you do not have permission');
            }
        }
        return $next($request);
    }
}
