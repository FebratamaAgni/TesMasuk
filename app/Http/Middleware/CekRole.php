<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // jika role sesuai apa yang telah didaftarkan/autentikasi, maka akan diizinkan masuk mengakses aplikasi sesuai role
        if(in_array($request->user()->role, $roles)){
            return $next($request);
        }
        return redirect()->route('login');
    }
}
