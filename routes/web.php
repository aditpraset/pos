<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    // Dashboard (Default, akan diarahkan berdasarkan peran)
    Route::get('/dashboard', [AppController::class, 'superadminDashboard'])->name('dashboard');

    // Dashboard Spesifik Peran
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/sales', [AppController::class, 'salesDashboard'])->name('sales');
        Route::get('/superadmin', [AppController::class, 'superadminDashboard'])->name('superadmin');
        Route::get('/kepala-depo', [AppController::class, 'kepalaDepoDashboard'])->name('kepala_depo');
        Route::get('/koperasi', [AppController::class, 'koperasiDashboard'])->name('koperasi');
        Route::get('/supplier', [AppController::class, 'supplierDashboard'])->name('supplier');
    });

    // Master Data Group
    Route::prefix('master-data')->name('master_data.')->group(function () {
        Route::get('/sales', [AppController::class, 'masterDataSales'])->name('sales');
        Route::get('/sales/{id}', [AppController::class, 'masterDataSalesDetail'])->name('sales_detail');
        Route::get('/depo', [AppController::class, 'masterDataDepo'])->name('depo');
        Route::get('/depo/{id}', [AppController::class, 'masterDataDepoDetail'])->name('depo_detail');

        // Jenis Pembayaran Routes
        Route::get('/jenis-pembayaran', [PaymentMethodController::class, 'index'])->name('jenis_pembayaran');
        Route::post('/jenis-pembayaran', [PaymentMethodController::class, 'store'])->name('jenis_pembayaran.store');
        Route::get('/jenis-pembayaran/{id}/edit', [PaymentMethodController::class, 'edit'])->name('jenis_pembayaran.edit');
        Route::put('/jenis-pembayaran/{id}', [PaymentMethodController::class, 'update'])->name('jenis_pembayaran.update');
        Route::delete('/jenis-pembayaran/{id}', [PaymentMethodController::class, 'destroy'])->name('jenis_pembayaran.destroy');
    });

    // Manajemen Relasi Group
    Route::prefix('manajemen-relasi')->name('manajemen_relasi.')->group(function () {
        Route::get('/outlet', [AppController::class, 'manajemenRelasiOutlet'])->name('outlet');
        Route::get('/outlet/{id}', [AppController::class, 'manajemenRelasiOutletDetail'])->name('outlet_detail');
        Route::get('/customer', [AppController::class, 'manajemenRelasiCustomer'])->name('customer');
        Route::get('/customer/{id}', [AppController::class, 'manajemenRelasiCustomerDetail'])->name('customer_detail');
    });

    // Manajemen Produk & Penawaran Group
    Route::prefix('produk')->name('manajemen_produk.')->group(function () {
        // Category Routes
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
        Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

        // UOM Routes
        Route::get('/uom', [UomController::class, 'index'])->name('uom');
        Route::post('/uom', [UomController::class, 'store'])->name('uom.store');
        Route::put('/uom/{id}', [UomController::class, 'update'])->name('uom.update');
        Route::delete('/uom/{id}', [UomController::class, 'destroy'])->name('uom.destroy');

        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::get('/{id}', [ProductController::class, 'show'])->name('show');
        Route::post('/{id}/add-stock', [ProductController::class, 'addStock'])->name('add_stock');


        Route::get('/program-promo', [AppController::class, 'manajemenProdukPenawaranProgramPromo'])->name('program_promo');
        Route::get('/program-promo/{id}', [AppController::class, 'manajemenProdukPenawaranProgramPromoDetail'])->name('program_promo_detail');
    });

    // Operasional Sales Group
    Route::prefix('operasional-sales')->name('operasional_sales.')->group(function () {
        Route::get('/task-management', [AppController::class, 'operasionalSalesTaskManagement'])->name('task_management');
        Route::get('/task-management/{id}', [AppController::class, 'operasionalSalesTaskDetail'])->name('task_detail');
        Route::get('/sales-order', [AppController::class, 'operasionalSalesSalesOrder'])->name('sales_order');
        Route::get('/sales-order/{id}', [AppController::class, 'operasionalSalesSalesOrderDetail'])->name('sales_order_detail');
        Route::get('/pengiriman', [AppController::class, 'operasionalSalesPengiriman'])->name('pengiriman');
        Route::get('/pengiriman/{id}', [AppController::class, 'operasionalSalesPengirimanDetail'])->name('pengiriman_detail');
        Route::get('/penagihan', [AppController::class, 'operasionalSalesPenagihan'])->name('penagihan');
        Route::get('/penagihan/{id}', [AppController::class, 'operasionalSalesPenagihanDetail'])->name('penagihan_detail');
    });

    // Reports Group
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/', [AppController::class, 'reportsIndex'])->name('index');
        Route::get('/penjualan', [AppController::class, 'reportsPenjualan'])->name('penjualan');
        Route::get('/kunjungan-sales', [AppController::class, 'reportsKunjunganSales'])->name('kunjungan_sales');
        Route::get('/pengiriman', [AppController::class, 'reportsPengiriman'])->name('pengiriman');
        Route::get('/penagihan', [AppController::class, 'reportsPenagihan'])->name('penagihan');
        Route::get('/produk', [AppController::class, 'reportsProduk'])->name('produk');
        Route::get('/program-promo', [AppController::class, 'reportsProgramPromo'])->name('program_promo');
        Route::get('/customer', [AppController::class, 'reportsCustomer'])->name('customer');
    });
});
