<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AnonymousToken
{
    public function handle(Request $request, Closure $next)
    {
        // Attach or generate anonymous token
        if (!$request->header('X-MindDrop-Token')) {
            $request->headers->set('X-MindDrop-Token', 'demo-token');
        }
        return $next($request);
    }
}
