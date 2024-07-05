<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->type == 'admin') {
            return $next($request);
        }

        return redirect('/adminbilma/login'); // Redirige vers la page de connexion admin si l'utilisateur n'est pas admin
    }
}

