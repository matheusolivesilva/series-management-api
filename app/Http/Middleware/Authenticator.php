<?php

namespace App\Http\Middleware;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class Authenticator 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, \Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception();
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $authenticationData = JWT::decode($token, env('JWT_KEY'), ['HS256']);
            $user = User::where('email', $authenticationData->email)->first();
            if (is_null($user)) {
                throw new \Exception();
            }
            return $next($request);
        } catch(\Exception $e) {
            return response()->json('Unauthorized', 401);
        }
    }
}
