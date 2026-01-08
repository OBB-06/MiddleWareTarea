<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    // esto es lo que hace el middleware
    public function handle(Request $request, Closure $next)
    {
        // si la edad es menor a 18 lo mando de vuelta
        if ($request->age < 18) {
            return redirect('/');
        }

        // si no, que siga normal
        return $next($request);
    }
}