<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class PrimeiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::debug('Passou pelo PrimeiroMiddleware ANTES');
        // return response('Parando a chamada');
        $response = $next($request);
        Log::debug("Passou pelo PrimeiroMiddleware DEPOIS");
        return response('Alterei a resposta', 201);
    }
}
