<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Roles
{
    public function handle($request, Closure $next)
    {
        $controller = $request->segment(2);
        $method = $request->method();
        $action = $request->route()->getAction()['uses'];
        $action = last(explode('@', $action));

        if (Auth::user()->role == 3)
        {
            return redirect()->route('vnexpress.page.error', ['status' => '401']);
        }

        switch ($controller){
            case 'user':
                switch ($action){
                    case 'create':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'store':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'edit':
                        if (Auth::user()->role != 1 && Auth::user()->id != $request->id){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'destroy':
                        if (Auth::user()->role != 1 && Auth::user()->id != $request->id){
                            return redirect()->route('index.error');
                        }
                        break;
                }
                break;
            case 'cat':
                switch ($action){
                    case 'create':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'store':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'edit':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'destroy':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                    }
                break;
            case 'guest':
                switch ($action){
                    case 'edit':
                        if (Auth::user()->id != $request->id){
                            return redirect()->route('index.error');
                        }
                        break;
                    case 'destroy':
                        if (Auth::user()->role != 1 && Auth::user()->id != $request->id){
                            return redirect()->route('index.error');
                        }
                        break;
                }
                break;
            case 'adv':
                switch ($action){
                    case 'destroy':
                        if (Auth::user()->role != 1){
                            return redirect()->route('index.error');
                        }
                        break;
                }
                break;
        }

        return $next($request);
    }
}
