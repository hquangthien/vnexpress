<?php

namespace App\Http\Middleware;

use Closure;

class Category
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
        /*dd($request->segment(2));
        dd($request->method());*/
        if (Auth::user()->role == 1)
        {
            return $next($request);
        } else{
            return back()->with('msg', 'Bạn không có quyền truy cập nội dung này');
        }
    }
}
