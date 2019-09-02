<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

//php artisan make:middleware JWT
//This class checks the validity of the JWT Token and handles the respective error.
//Make sure to register this middleware on Kernel.php under: (protected $routeMiddleware)

class JWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
    
//     public function handle($request, Closure $next)
//     {
//     if ($request->has('token')) {
//         try 
//         {
//             $this->auth = JWTAuth::parseToken()->authenticate();
//             return $next($request);
//         } 
//         catch (JWTException $e) {
//             return response()->json(['error'=>'token_invalid','error_description'=>'The token is invalid']);            
//         }
//     }
// }
}
