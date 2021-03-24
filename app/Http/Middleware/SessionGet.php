<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionGet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cart_id = $request->session()->get('cart');
        return $next($request);
        // $cart_id = [];

        // return $cart_id;
        // $cart_id = Session::get('cart');

    }

    // public function sesstionget(Request $request)
    // {
    //     # code...
    // }
}
