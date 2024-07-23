<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->server->get("REMOTE_ADDR");
        $url = $request->getRequestUri();
        LogAcesso::create([
            'log' => "O IP $ip xyz requisitou a rota $url"
        ]);

        return $next($request);
    }
}
