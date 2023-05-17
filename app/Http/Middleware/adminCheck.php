<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\user;
use Session;

use Illuminate\Support\Facades\Auth;

class adminCheck
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
        if (!session()->has('loginid')) {


            return redirect('login')->with('fail', 'You must log in first');

        } else {
            $user = User::find(session::get('loginid'));
            if($user->role != 'admin')
            return redirect('login')->with('fail', "You don't have admin privillige");
        }
        return $next($request);
    }
}