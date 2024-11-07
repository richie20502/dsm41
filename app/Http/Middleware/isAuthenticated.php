<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        // Verificar si el usuario no está autenticado
        if (!Auth::check()) {
            
            // Redirigir al login con un mensaje de error si no está autenticado
            return redirect()->route('login')->withErrors(['error' => 'Debe iniciar sesión para acceder.']);
        }

        return $next($request);
    }
}
