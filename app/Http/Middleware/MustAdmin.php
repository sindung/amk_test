<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MustAdmin
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
        // bisa melewati middleware jika role = admin
        if (Auth::user()->role_id != '690176ab-ae8f-4813-bc92-4b0a92a5d5d9') {
            // abort(404);
            Session::flash('status', 'warning');
            Session::flash('alert', 'warning');
            Session::flash('message', 'Sorry, only admin can do that right now.');

            return redirect()->back();
        }

        return $next($request);
    }
}
