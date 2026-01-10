<?php

namespace App\Http\Controllers;

use App\Models\Uom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UomController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Uom::query();
            return DataTables::of($query)
                ->addColumn('action', function ($row) {
                    $editBtn = '<button type="button" class="btn btn-warning btn-sm edit-btn" data-id="' . $row->id . '" data-name="' . $row->name . '" data-description="' . $row->description . '">Edit</button>';
                    $deleteBtn = '<button type="button" class="btn btn-danger btn-sm delete-btn" data-id="' . $row->id . '">Hapus</button>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('manajemen_produk_penawaran.uom');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:uoms,name',
            'description' => 'nullable|string',
        ]);

        Uom::create($validated);

        return response()->json(['success' => 'Satuan berhasil ditambahkan!']);
    }

    public function update(Request $request, $id)
    {
        $uom = Uom::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|unique:uoms,name,' . $id,
            'description' => 'nullable|string',
        ]);

        $uom->update($validated);

        return response()->json(['success' => 'Satuan berhasil diperbarui!']);
    }

    public function destroy($id)
    {
        $uom = Uom::findOrFail($id);
        $uom->delete();

        return response()->json(['success' => 'Satuan berhasil dihapus!']);
    }
}
