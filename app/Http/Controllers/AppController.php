<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // Dashboard (Default, akan diarahkan berdasarkan peran)
    public function dashboard()
    {
        // Contoh sederhana: Anda akan membutuhkan logika autentikasi dan otorisasi di sini
        // untuk mengarahkan pengguna ke dashboard yang sesuai.
        // Misalnya:
        // if (Auth::user()->hasRole('superadmin')) {
        //     return redirect()->route('dashboard.superadmin');
        // } elseif (Auth::user()->hasRole('kepala_depo')) {
        //     return redirect()->route('dashboard.kepala_depo');
        // } elseif (Auth::user()->hasRole('sales')) {
        //     return redirect()->route('dashboard.sales');
        // }
        // Untuk demo, kita akan arahkan ke superadmin dashboard sebagai default jika tidak ada logika role
        return view('dashboard.superadmin_dashboard');
    }

    // Dashboard Spesifik Peran
    public function salesDashboard()
    {
        return view('dashboard.sales_dashboard');
    }

    public function superadminDashboard()
    {
        // Widget Data
        $monthlySales = \App\Models\Order::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->sum('total_amount');

        $totalOrders = \App\Models\Order::count();

        $dailySales = \App\Models\Order::whereDate('created_at', date('Y-m-d'))
            ->sum('total_amount');

        $dailyOrders = \App\Models\Order::whereDate('created_at', date('Y-m-d'))
            ->count();

        // Chart 1: Monthly Sales Trend (Current Year)
        $salesTrend = \App\Models\Order::selectRaw('MONTH(created_at) as month, SUM(total_amount) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Fill missing months with 0
        $monthlySalesData = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlySalesData[] = $salesTrend[$i] ?? 0;
        }

        // Chart 2: Order Status Distribution
        $statusDistribution = \App\Models\Order::selectRaw('status_id, count(*) as total')
            ->groupBy('status_id')
            ->with('status')
            ->get();

        $statusLabels = $statusDistribution->pluck('status.name');
        $statusData = $statusDistribution->pluck('total');

        return view('dashboard.superadmin_dashboard', compact(
            'monthlySales',
            'totalOrders',
            'dailySales',
            'dailyOrders',
            'monthlySalesData',
            'statusLabels',
            'statusData'
        ));
    }

    public function kepalaDepoDashboard()
    {
        return view('dashboard.kepala_depo_dashboard');
    }

    // Master Data
    public function masterDataSales()
    {
        return view('master_data.sales');
    }

    public function masterDataSalesDetail($id) // Metode baru
    {
        return view('master_data.sales_detail', ['sales_id' => $id]);
    }

    public function masterDataDepo()
    {
        return view('master_data.depo');
    }

    public function masterDataDepoDetail($id) // Metode baru
    {
        return view('master_data.depo_detail', ['depo_id' => $id]);
    }

    public function masterDataJenisPembayaran()
    {
        return view('master_data.jenis_pembayaran');
    }

    // Manajemen Relasi
    public function manajemenRelasiOutlet()
    {
        return view('manajemen_relasi.outlet');
    }

    public function manajemenRelasiOutletDetail($id) // Metode baru
    {
        return view('manajemen_relasi.outlet_detail', ['outlet_id' => $id]);
    }

    public function manajemenRelasiCustomer()
    {
        return view('manajemen_relasi.customer');
    }

    public function manajemenRelasiCustomerDetail($id) // Metode baru
    {
        return view('manajemen_relasi.customer_detail', ['customer_id' => $id]);
    }

    // Manajemen Produk & Penawaran
    public function manajemenProdukPenawaranProgramPromo()
    {
        return view('manajemen_produk_penawaran.program_promo');
    }

    public function manajemenProdukPenawaranProgramPromoDetail($id) // Metode baru
    {
        return view('manajemen_produk_penawaran.program_promo_detail', ['program_promo_id' => $id]);
    }

    // Operasional Sales
    public function operasionalSalesTaskManagement()
    {
        return view('operasional_sales.task_management');
    }

    public function operasionalSalesTaskDetail($id)
    {
        return view('operasional_sales.task_detail', ['task_id' => $id]);
    }

    public function operasionalSalesSalesOrder()
    {
        return view('operasional_sales.sales_order');
    }

    public function operasionalSalesSalesOrderDetail($id)
    {
        return view('operasional_sales.sales_order_detail', ['so_id' => $id]);
    }

    public function operasionalSalesPengiriman()
    {
        return view('operasional_sales.pengiriman');
    }

    public function operasionalSalesPengirimanDetail($id)
    {
        return view('operasional_sales.pengiriman_detail', ['do_id' => $id]);
    }

    public function operasionalSalesPenagihan()
    {
        return view('operasional_sales.penagihan');
    }

    public function operasionalSalesPenagihanDetail($id)
    {
        return view('operasional_sales.penagihan_detail', ['invoice_id' => $id]);
    }

    // Laporan
    public function reportsIndex()
    {
        return view('reports.index');
    }

    public function reportsPenjualan(\Illuminate\Http\Request $request)
    {
        // 1. Filter Date
        $startDate = $request->input('start_date', date('Y-m-01'));
        $endDate = $request->input('end_date', date('Y-m-t'));

        // 2. Query Orders
        $query = \App\Models\Order::with(['status', 'paymentMethod'])
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate);

        $orders = $query->orderBy('created_at', 'desc')->get();

        // 3. Summary Stats
        $totalSales = $orders->sum('total_amount');
        $totalTransactions = $orders->count();
        $totalItemsSold = $orders->sum('quantity');

        // Calculate days difference for average
        $start = \Carbon\Carbon::parse($startDate);
        $end = \Carbon\Carbon::parse($endDate);
        $days = $start->diffInDays($end) + 1;
        $averageDailySales = $days > 0 ? $totalSales / $days : 0;

        // 4. Chart: Sales Trend (Daily within range)
        $salesTrendData = \App\Models\Order::selectRaw('DATE(created_at) as date, SUM(total_amount) as total')
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('total', 'date')
            ->toArray();

        // Fill dates
        $chartDates = [];
        $chartValues = [];
        $current = $start->copy();
        while ($current <= $end) {
            $dateStr = $current->format('Y-m-d');
            $chartDates[] = $current->format('d M');
            $chartValues[] = $salesTrendData[$dateStr] ?? 0;
            $current->addDay();
        }

        // 5. Chart: Sales by Category
        $salesByCategory = \App\Models\OrderDetail::join('products', 'order_details.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->whereDate('orders.created_at', '>=', $startDate)
            ->whereDate('orders.created_at', '<=', $endDate)
            ->selectRaw('categories.name, SUM(order_details.quantity) as total_qty')
            ->groupBy('categories.id', 'categories.name')
            ->get();

        $categoryLabels = $salesByCategory->pluck('name');
        $categoryData = $salesByCategory->pluck('total_qty');

        return view('reports.penjualan', compact(
            'orders',
            'startDate',
            'endDate',
            'totalSales',
            'totalTransactions',
            'totalItemsSold',
            'averageDailySales',
            'chartDates',
            'chartValues',
            'categoryLabels',
            'categoryData'
        ));
    }

    public function reportsPenjualanDetail($id)
    {
        $order = \App\Models\Order::with(['status', 'paymentMethod', 'orderDetails.product.uom'])
            ->findOrFail($id);

        return view('reports.penjualan_detail', compact('order'));
    }

    public function reportsKunjunganSales()
    {
        return view('reports.kunjungan_sales');
    }

    public function reportsPengiriman()
    {
        return view('reports.pengiriman');
    }

    public function reportsPenagihan()
    {
        return view('reports.penagihan');
    }

    public function reportsProduk()
    {
        return view('reports.produk');
    }

    public function reportsProgramPromo()
    {
        return view('reports.program_promo');
    }

    public function reportsCustomer()
    {
        return view('reports.customer');
    }

    public function supplierDashboard()
    {
        return view('dashboard.supplier_dashboard');
    }

    public function koperasiDashboard()
    {
        return view('dashboard.koperasi_dashboard');
    }
}
