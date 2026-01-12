<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreOrderRequest;
use App\Http\Requests\Api\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class OrderController extends Controller implements HasMiddleware
{
    /**
     * Order service instance
     *
     * @var OrderService
     */
    protected $orderService;

    /**
     * Create a new controller instance.
     *
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api', except: ['show']),
        ];
    }

    /**
     * Display a listing of orders with pagination.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $perPage = $request->input('per_page', 15);
            $statusId = $request->input('status_id');
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $query = Order::with(['orderDetails.product', 'status', 'paymentMethod'])
                ->orderBy('created_at', 'desc');

            // Filter by status
            if ($statusId) {
                $query->where('status_id', $statusId);
            }

            // Filter by date range
            if ($startDate) {
                $query->whereDate('created_at', '>=', $startDate);
            }

            if ($endDate) {
                $query->whereDate('created_at', '<=', $endDate);
            }

            $orders = $query->paginate($perPage);

            // Get JWT token for authenticated user
            /** @var \Tymon\JWTAuth\JWTGuard $guard */
            $guard = Auth::guard('api');
            $token = $guard->getToken();
            $tokenString = $token ? $token->get() : null;

            return respondWithData(200, true, 'Berhasil mengambil data pesanan', [
                'token' => $tokenString,
                'orders' => OrderResource::collection($orders->items()),
                'pagination' => [
                    'current_page' => $orders->currentPage(),
                    'last_page' => $orders->lastPage(),
                    'per_page' => $orders->perPage(),
                    'total' => $orders->total(),
                ],
            ]);
        } catch (Exception $e) {
            return respondWithData(500, false, 'Gagal mengambil data pesanan: ' . $e->getMessage(), null);
        }
    }

    /**
     * Store a newly created order.
     *
     * @param StoreOrderRequest $request
     * @return JsonResponse
     */
    public function store(StoreOrderRequest $request): JsonResponse
    {
        try {
            $order = $this->orderService->createOrder($request->validated());

            // Get JWT token for authenticated user
            /** @var \Tymon\JWTAuth\JWTGuard $guard */
            $guard = Auth::guard('api');
            $token = $guard->getToken();
            $tokenString = $token ? $token->get() : null;

            return respondWithData(201, true, 'Pesanan berhasil dibuat', [
                'token' => $tokenString,
                'order' => new OrderResource($order)
            ]);
        } catch (Exception $e) {
            return respondWithData(500, false, $e->getMessage(), null);
        }
    }

    /**
     * Display the specified order.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            $order = Order::with(['orderDetails.product', 'status', 'paymentMethod'])->findOrFail($id);

            return respondWithData(200, true, 'Berhasil mengambil detail pesanan', new OrderResource($order));
        } catch (Exception $e) {
            return respondWithData(404, false, 'Pesanan tidak ditemukan', null);
        }
    }

    /**
     * Update the specified order.
     *
     * @param UpdateOrderRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateOrderRequest $request, int $id): JsonResponse
    {
        try {
            $order = Order::findOrFail($id);
            $updatedOrder = $this->orderService->updateOrder($order, $request->validated());

            return respondWithData(200, true, 'Pesanan berhasil diupdate', new OrderResource($updatedOrder));
        } catch (Exception $e) {
            return respondWithData(500, false, $e->getMessage(), null);
        }
    }

    /**
     * Remove the specified order.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $order = Order::findOrFail($id);
            $this->orderService->deleteOrder($order);

            return respondWithData(200, true, 'Pesanan berhasil dihapus', null);
        } catch (Exception $e) {
            return respondWithData(500, false, $e->getMessage(), null);
        }
    }
}
