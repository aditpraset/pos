<?php

if (!function_exists('respondWithToken')) {
    /**
     * Get the token array structure.
     *
     * @param  string $token
     * @param  mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    function respondWithToken($code, $status, $message, $token, $data = null)
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => [
                'token' => $token,
                'refresh_token' => $token, // Using the same token as refresh_token for now
                'data' => $data
            ]
        ]);
    }
}
