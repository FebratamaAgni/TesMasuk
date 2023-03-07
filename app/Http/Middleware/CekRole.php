<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
{
    
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(in_array($request->user()->role, $roles)){
            return $next($request);
        }
        return redirect('/login');
    }
}
