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
        ],  $code);
    }
}

if (!function_exists('respondWithData')) {
    /**
     * Get a standardized API response structure.
     *
     * @param  int $code
     * @param  bool $status
     * @param  string $message
     * @param  mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    function respondWithData($code, $status, $message, $data = null)
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
