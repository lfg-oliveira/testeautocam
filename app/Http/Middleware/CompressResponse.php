<?php

namespace App\Http\Middleware;

use Closure;

class CompressResponse {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    function handle($request, Closure $next) {
        $content = $next($request)->content();
        $data = gzencode($content, 4);

        return response($data)
        ->withHeaders([
            'Content-type' => 'application/json; utf-8',
            'Content-length' => strlen($data),
            'Content-Encoding' => 'gzip'
        ]);
    }
}
