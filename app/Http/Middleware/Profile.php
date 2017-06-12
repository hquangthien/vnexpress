<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Profile
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
        $controller = $request->segment(1);
        $method = $request->method();
        $action = $request->route()->getAction()['uses'];
        $action = last(explode('@', $action));
        $currentId = Auth::user()->id;
        $requestId = intval($request->id);
        switch ($controller){
            case 'thanh-vien':
                switch ($action){
                    case 'edit':
                        if ( $currentId != $requestId ){
                            return redirect()->route('vnexpress.page.error', ['status' => '401']);
                        }
                        break;
                    case 'update':
                    if ( $currentId != $requestId ){
                        return redirect()->route('vnexpress.page.error', ['status' => '401']);
                    }
                    break;
                }
                break;
        }
        return $next($request);
    }
}
