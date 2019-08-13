<?php

namespace App\Http\Controllers\Api;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthAdController extends Controller
{

    public function __construct()
    {
        $this->admin = new Admin;
    }

    public function register(Request $request)
    {
        $params = $request->only( 'name', 'password','avatar', 'email');
        $admin = new Admin();
        $admin->name = $params['name'];
        $admin->avatar = $params['avatar'];
        $admin->email = $params['email'];
        $admin->password = bcrypt($params['password']);
        $admin->save();

        return response()->json($admin, Response::HTTP_OK);
    }

    public function login(Request $request)
    {
        config()->set( 'auth.defaults.guard', 'admin' );
        Config::set('jwt.user', 'App\Admin');
        Config::set('auth.providers.users.model', Admin::class);

        Log::info($request);

        $credentials = $request->only('name', 'password');

        if (!($token = JWTAuth::attempt($credentials))) {
            return response()->json([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.',
                'data' => $token
            ], Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['token' => 'Bearer '. $token], Response::HTTP_OK);
    }
}
