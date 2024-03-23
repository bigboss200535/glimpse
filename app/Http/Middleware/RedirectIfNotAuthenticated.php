<?php

namespace App\Http\Middleware;

// use App\Http\Controllers\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectIfNotAuthenticated
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

        //  if (!Auth::check()){
        //     return redirect()->route('/login');
        // }

        // if (!$request->session()->exists()){
        //      // Auth::logout();   // Log out the user
        //      return redirect()->route('/login')->withErrors(['message' => 'Your session has expired. Please log in again.']);
        // }

        return $next($request);
    }
}


 