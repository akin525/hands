<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Ads
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
        if (Auth::user()) {
            if (Auth::user()->usertype == 'ads') {
                return $next($request);
            } else {
//                Auth::logout();
                Alert::error('Message','Kindly register as Advertiser');
                return back();
//                return redirect('register')->with('status', 'Kindly register as Request Advertiser');
            }
        }
    }
}
