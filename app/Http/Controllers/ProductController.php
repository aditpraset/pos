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

        $categories = Category::all();
        $uoms = Uom::all();
        return view('manajemen_produk_penawaran.product', compact('categories', 'uoms'));
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

        return view('manajemen_produk_penawaran.product_detail', compact('product'));
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
