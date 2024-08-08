<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPtqApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the API key from the request header (you can also get it from the query params if needed)
        $apiKey = $request->header('X-PTQ-API-KEY'); // or $request->input('api_key') for query string

        // Check if the API key exists and is valid
        if (!$apiKey || $apiKey !== env('PTQ_API_KEY')) { // You can replace this with your own logic
            return response()->json(['message' => 'Unauthorized. Invalid or missing API key.'], 401);
        }

        // Proceed to the next middleware or request handler
        return $next($request);
    }
}
