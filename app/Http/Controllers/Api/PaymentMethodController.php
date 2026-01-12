<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PaymentMethodController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api'),
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $paymentMethods = PaymentMethod::all();

            return respondWithData(200, true, 'Berhasil mengambil data metode pembayaran', $paymentMethods);
        } catch (Exception $e) {
            return respondWithData(500, false, 'Gagal mengambil data metode pembayaran: ' . $e->getMessage(), null);
        }
    }
}
