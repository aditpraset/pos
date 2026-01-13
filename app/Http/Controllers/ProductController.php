<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAdded;
use App\Models\ProductLog;
use App\Models\Uom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Product::with(['category', 'uom']);
            return DataTables::of($query)
                ->addColumn('category_name', function ($row) {
                    return $row->category ? $row->category->name : '-';
                })
                ->addColumn('uom_name', function ($row) {
                    return $row->uom ? $row->uom->name : '-';
                })
                ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return '<img src="' . asset('storage/' . $row->image) . '" alt="' . $row->name . '" class="img-fluid" style="max-height: 50px;">';
                    }
                    return '-';
                })
                ->editColumn('price', function ($row) {
                    return 'Rp ' . number_format($row->price, 0, ',', '.');
                })
                ->addColumn('action', function ($row) {
                    $detailBtn = '<a href="' . route('manajemen_produk.show', $row->id) . '" class="btn btn-info btn-sm">Detail</a>';
                    $editBtn = '<button type="button" class="btn btn-warning btn-sm edit-btn" data-id="' . $row->id . '">Edit</button>';
                    $deleteBtn = '<button type="button" class="btn btn-danger btn-sm delete-btn" data-id="' . $row->id . '">Hapus</button>';
                    return $detailBtn . ' ' . $editBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }
        // Dashboard Stats
        $totalProducts = Product::count();

        // Top Selling Product (This Month)
        $topSellingProduct = \App\Models\OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->whereMonth('orders.created_at', date('m'))
            ->whereYear('orders.created_at', date('Y'))
            ->select('products.name', 'products.uom_id', DB::raw('SUM(order_details.quantity) as total_qty'))
            ->groupBy('products.id', 'products.name', 'products.uom_id')
            ->orderByDesc('total_qty')
            ->with('product.uom')
            ->first();

        $topSellingProductName = $topSellingProduct ? $topSellingProduct->name : '-';

        $lowStockCount = Product::where('stock', '<', 10)->count(); // Threshold < 10

        $totalStockValue = Product::select(DB::raw('SUM(price * stock) as total_value'))->value('total_value');

        // Chart 1: Monthly Sales (Current Year)
        $monthlySalesData = \App\Models\OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
            ->whereYear('orders.created_at', date('Y'))
            ->select(DB::raw('MONTH(orders.created_at) as month'), DB::raw('SUM(order_details.quantity) as total_qty'))
            ->groupBy('month')
            ->pluck('total_qty', 'month')
            ->toArray();

        $chartSalesData = [];
        for ($i = 1; $i <= 12; $i++) {
            $chartSalesData[] = $monthlySalesData[$i] ?? 0;
        }

        // Chart 2: Stock by Category
        $stockByCategory = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.name', DB::raw('SUM(products.stock) as total_stock'))
            ->groupBy('categories.id', 'categories.name')
            ->get();

        $chartStockLabels = $stockByCategory->pluck('name');
        $chartStockData = $stockByCategory->pluck('total_stock');

        $categories = Category::all();
        $uoms = Uom::all();

        return view('manajemen_produk_penawaran.product', compact(
            'categories',
            'uoms',
            'totalProducts',
            'topSellingProductName',
            'lowStockCount',
            'totalStockValue',
            'chartSalesData',
            'chartStockLabels',
            'chartStockData'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:products,name',
            'category_id' => 'required|exists:categories,id',
            'uom_id' => 'required|exists:uoms,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        Product::create($validated);

        return response()->json(['success' => 'Produk berhasil ditambahkan!']);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|unique:products,name,' . $id,
            'category_id' => 'required|exists:categories,id',
            'uom_id' => 'required|exists:uoms,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Optional: Delete old image if exists
            // if ($product->image) {
            //     Storage::disk('public')->delete($product->image);
            // }

            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        $product->update($validated);

        return response()->json(['success' => 'Produk berhasil diperbarui!']);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        // if ($product->image) {
        //     Storage::disk('public')->delete($product->image);
        // }
        $product->delete();

        return response()->json(['success' => 'Produk berhasil dihapus!']);
    }

    public function show(Request $request, $id)
    {
        $product = Product::with(['category', 'uom'])->findOrFail($id);

        if ($request->ajax()) {
            if ($request->type == 'orders') {
                $query = \App\Models\OrderDetail::with(['order'])
                    ->where('product_id', $id)
                    ->join('orders', 'order_details.order_id', '=', 'orders.id')
                    ->select('order_details.*', 'orders.created_at as order_date', 'orders.order_number', 'orders.customer_name')
                    ->orderBy('orders.created_at', 'desc');

                return DataTables::of($query)
                    ->addIndexColumn()
                    ->editColumn('order_date', function ($row) {
                        return \Carbon\Carbon::parse($row->order_date)->format('d F Y H:i');
                    })
                    ->addColumn('customer_name', function ($row) {
                        return $row->customer_name;
                    })
                    ->editColumn('quantity', function ($row) {
                        return number_format($row->quantity, 0, ',', '.');
                    })
                    ->editColumn('total_amount', function ($row) {
                        return 'Rp ' . number_format($row->total_amount, 0, ',', '.');
                    })
                    ->make(true);
            } else {
                $query = ProductLog::where('product_id', $id)->orderBy('created_at', 'desc');
                return DataTables::of($query)
                    ->addIndexColumn()
                    ->editColumn('created_at', function ($row) {
                        return $row->created_at->format('d F Y H:i');
                    })
                    ->editColumn('added_quantity', function ($row) {
                        return number_format($row->added_quantity, 0, ',', '.');
                    })
                    ->editColumn('last_stock', function ($row) {
                        return number_format($row->last_stock, 0, ',', '.');
                    })
                    ->make(true);
            }
        }

        // Calculate Product Stats (Current Year)
        $currentYear = date('Y');

        $totalSoldYear = \App\Models\OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
            ->where('product_id', $id)
            ->where('product_id', $id)
            ->whereYear('orders.created_at', $currentYear)
            ->sum('order_details.quantity');

        $totalSalesValueYear = \App\Models\OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
            ->where('product_id', $id)
            ->where('product_id', $id)
            ->whereYear('orders.created_at', $currentYear)
            ->sum('order_details.total_amount');

        return view('manajemen_produk_penawaran.product_detail', compact('product', 'totalSoldYear', 'totalSalesValueYear'));
    }

    public function addStock(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        try {
            DB::beginTransaction();

            $product = Product::findOrFail($id);
            $quantity = $request->quantity;

            // 1. Create ProductAdded record
            ProductAdded::create([
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);

            // 2. Update Product Stock
            $product->stock += $quantity;
            $product->save();

            // 3. Create ProductLog record
            ProductLog::create([
                'product_id' => $product->id,
                'added_quantity' => $quantity,
                'removed_quantity' => 0,
                'last_stock' => $product->stock,
            ]);

            DB::commit();

            return response()->json(['success' => 'Stok berhasil ditambahkan!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Gagal menambahkan stok: ' . $e->getMessage()], 500);
        }
    }
}
