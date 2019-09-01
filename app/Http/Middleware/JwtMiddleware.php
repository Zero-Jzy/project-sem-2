<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::info("chay den day");
        try
        {
            if (! $user = JWTAuth::parseToken()->authenticate() )
            {
                return response()->json([
                    'code'   => 101, // means auth error in the api,
                   'response' => null // nothing to show
                 ]);
            }
        }
        catch (TokenExpiredException $e)
        {
            // If the token is expired, then it will be refreshed and added to the headers
            try
            {
                $refreshed = JWTAuth::refresh(JWTAuth::getToken());
                $user = JWTAuth::setToken($refreshed)->toUser();
                header('Authorization: Bearer ' . $refreshed);
            }
            catch (JWTException $e)
            {
                return response()->json([
                    'code'   => 103, // means not refreshable
                   'response' => null // nothing to show
                 ]);
            }
        }
        catch (JWTException $e)
        {
            return response()->json([
                'code'   => 101, // means auth error in the api,
                'response' => null // nothing to show
            ]);
        }

        // Login the user instance for global usage
        JWTAuth::login($user, false);

        return  $next($request);
    }
}
