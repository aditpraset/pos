<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class AuthController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api', except: ['login']),
        ];
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = Auth::guard('api');

        if (! $token = $guard->attempt($credentials)) {
            return respondWithToken(401, false, 'Silahkan periksa kembali email dan password Anda', null, null);
        }
        $users = User::find($guard->user()->id);

        $user = $users;
        $user->roles = $users->getRoleNames();

        return respondWithToken(200, true, 'Success', $token, $user);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $users = User::find(Auth::guard('api')->user()->id);

        $user = $users;
        $user->roles = $users->getRoleNames();

        return respondWithToken(200, true, 'Success', null, $user);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = Auth::guard('api');
        $guard->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        /** @var \Tymon\JWTAuth\JWTGuard $guard */

        $guard = Auth::guard('api');
        $users = User::find($guard->user()->id);

        $user = $users;
        $user->roles = $users->getRoleNames();

        return respondWithToken(200, true, 'Success',  $guard->refresh(), $user);
    }
}
