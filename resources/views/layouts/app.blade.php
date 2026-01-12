@php
    $v = '1751302800';
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('assets/tabler/dashboard/dist/libs/jsvectormap/dist/jsvectormap.css?') . $v }}"
        rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/tabler/dashboard/dist/css/tabler.css?') . $v }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
    <style>
        :root {
            --tblr-primary: #405131;
        }
    </style>
    <!-- BEGIN DATATABLES STYLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css" />
    <!-- END DATATABLES STYLES -->
</head>

<body class="layout-fluid">
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('assets/tabler/dashboard/dist/js/tabler-theme.min.js?') . $v }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        <!-- BEGIN NAVBAR  -->
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <!-- BEGIN NAVBAR TOGGLER -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- END NAVBAR TOGGLER -->
                <!-- BEGIN NAVBAR LOGO -->
                <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="{{ route('dashboard') }}" aria-label="{{ config('app.name') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="navbar-brand-image">
                        <span>Kurma Amanah Berkah</span>
                    </a>
                </div>
                <!-- END NAVBAR LOGO -->
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <div class="nav-item">
                            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/moon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path
                                        d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                                </svg>
                            </a>
                            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/sun -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path
                                        d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                                </svg>
                            </a>
                        </div>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                                aria-label="Show notifications" data-bs-auto-close="outside" aria-expanded="false">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h3 class="card-title">Notifications</h3>
                                        <div class="btn-close ms-auto" data-bs-dismiss="dropdown"></div>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span
                                                        class="status-dot status-dot-animated bg-red d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 1</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">Change
                                                        deprecated html tags to text decoration classes (#29604)</div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon text-muted icon-2">
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 2</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions show">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon text-yellow icon-2">
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 3</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">Update
                                                        change-version.js (#29736)</div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon text-muted icon-2">
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span
                                                        class="status-dot status-dot-animated bg-green d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 4</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">Regenerate
                                                        package-lock.json (#29730)</div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon text-muted icon-2">
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#" class="btn btn-2 w-100"> Archive all </a>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="btn btn-2 w-100"> Mark all as read </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm"
                                style="background-image: url({{ asset('assets/tabler/dashboard/static/avatars/000m.jpg') }})">
                            </span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ Auth::user()->name ?? 'User' }}</div>
                                <div class="mt-1 small text-secondary">
                                    {{ optional(Auth::user()->role)->name ?? 'Role' }}</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
        </header>
        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <div class="row flex-column flex-md-row flex-fill align-items-center">
                            <div class="col">
                                <!-- BEGIN NAVBAR MENU -->
                                <ul class="navbar-nav">
                                    {{-- Dashboard Dropdown --}}
                                    <li
                                        class="nav-item dropdown {{ Request::routeIs('dashboard.*') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="#navbar-dashboard"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                                </svg>
                                            </span>
                                            <span class="nav-link-title"> Dashboard </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item {{ Request::routeIs('dashboard.superadmin') ? 'active' : '' }}"
                                                href="{{ route('dashboard.superadmin') }}">
                                                Superadmin Dashboard
                                            </a>
                                        </div>
                                    </li>

                                    {{-- Menu Manajemen Produk --}}
                                    <li
                                        class="nav-item dropdown {{ Request::routeIs('manajemen_produk_penawaran.*') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="#navbar-manajemen-produk-penawaran"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 12c-2.21 0 -4 -1.79 -4 -4s1.79 -4 4 -4s4 1.79 4 4s-1.79 4 -4 4zm0 2c-2.67 0 -8 1.34 -8 4v2h16v-2c0 -2.66 -5.33 -4 -8 -4z" />
                                                </svg>
                                            </span>
                                            <span class="nav-link-title"> Produk </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item {{ Request::routeIs('manajemen_produk.index') ? 'active' : '' }}"
                                                href="{{ route('manajemen_produk.index') }}">
                                                Produk
                                            </a>
                                            <a class="dropdown-item {{ Request::routeIs('manajemen_produk.category') ? 'active' : '' }}"
                                                href="{{ route('manajemen_produk.category') }}">
                                                Kategori
                                            </a>
                                            <a class="dropdown-item {{ Request::routeIs('manajemen_produk.uom') ? 'active' : '' }}"
                                                href="{{ route('manajemen_produk.uom') }}">
                                                Satuan (UOM)
                                            </a>
                                        </div>
                                    </li>

                                    {{-- Menu Master Data --}}
                                    <li
                                        class="nav-item dropdown {{ Request::routeIs('master_data.*') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="#navbar-master-data"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                                    <path d="M12 12l8 -4.5" />
                                                    <path d="M12 12l0 9" />
                                                    <path d="M12 12l-8 -4.5" />
                                                    <path d="M12 12l0 -9" />
                                                </svg>
                                            </span>
                                            <span class="nav-link-title"> Master Data </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item {{ Request::routeIs('master_data.jenis_pembayaran') ? 'active' : '' }}"
                                                href="{{ route('master_data.jenis_pembayaran') }}">
                                                Jenis Pembayaran
                                            </a>
                                        </div>
                                    </li>

                                    {{-- Menu Laporan --}}
                                    <li class="nav-item dropdown {{ Request::routeIs('reports.*') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="#navbar-reports"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M10 10l-2 2l2 2" />
                                                    <path d="M14 10l2 2l-2 2" />
                                                    <path d="M12 5v14" />
                                                    <path d="M12 5l-2 2" />
                                                    <path d="M12 5l2 2" />
                                                </svg>
                                            </span>
                                            <span class="nav-link-title"> Laporan </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item {{ Request::routeIs('reports.penjualan') ? 'active' : '' }}"
                                                href="{{ route('reports.penjualan') }}">
                                                Laporan Penjualan
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/tabler/dashboard/dist/js/tabler.min.js?') . $v }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DATATABLES SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- END DATATABLES SCRIPTS -->

    @stack('scripts')
</body>

</html>
