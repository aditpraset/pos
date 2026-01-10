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
        return view('dashboard.superadmin_dashboard');
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

    public function reportsPenjualan()
    {
        return view('reports.penjualan');
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
