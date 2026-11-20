<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - ARSIP UPT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --navy: #172b4d;
            --navy-light: #243e65;
            --blue: #769bc9;
            --blue-soft: #e5eef9;
            --lavender: #eeeafd;
            --cream: #f8f9fc;
            --text: #34445d;
            --muted: #8996a9;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--cream);
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--text);
        }

        /* SIDEBAR */
        .sidebar {
            width: 225px;
            min-height: 100vh;
            background: var(--navy);
            position: fixed;
            top: 0;
            left: 0;
            padding: 27px 16px;
            color: white;
            z-index: 100;
            box-shadow: 5px 0 25px rgba(23, 43, 77, .08);
        }

        /* BRAND */
        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 30px;
        }

        .brand-logo {
            width: 85px;
            height: 85px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text {
            flex: 1;
            min-width: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .brand-name {
            font-size: 17px;
            font-weight: 750;
            letter-spacing: .3px;
            margin: 0;
            white-space: nowrap;
        }

        .brand-subtitle {
            color: #b8c8df;
            font-size: 10px;
            margin: 5px 0 0;
            padding: 0;
            text-align: left;
            line-height: 1.5;
        }

        /* USER PROFILE */
        .user-profile {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 13px 10px;
            background: rgba(255,255,255,.08);
            border-radius: 13px;
            margin-bottom: 22px;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            background: #dceaff;
            color: var(--navy);
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .user-name {
            font-size: 12px;
            font-weight: 650;
            margin: 0;
        }

        .user-role {
            font-size: 10px;
            color: #b8c8df;
            margin: 2px 0 0;
        }

        /* MENU */
        .menu-label {
            color: #91a8c8;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.4px;
            margin: 25px 10px 10px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #cbd7e8;
            text-decoration: none;
            padding: 12px 13px;
            border-radius: 11px;
            margin-top: 6px;
            font-size: 13px;
            font-weight: 500;
            transition: .25s;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,.09);
            color: white;
            transform: translateX(3px);
        }

        .sidebar a.active {
            background: #dceaff;
            color: var(--navy);
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(0,0,0,.08);
        }

        .menu-icon {
            font-size: 17px;
        }

        /* LOGOUT */
        .logout {
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,.12);
            padding-top: 20px;
        }

        .logout button {
            width: 100%;
            background: rgba(255,255,255,.07);
            color: #e5ecf7;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 10px;
            padding: 10px;
            font-size: 12px;
            transition: .2s;
        }

        .logout button:hover {
            background: #dceaff;
            color: var(--navy);
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 225px;
            padding: 35px 38px;
            min-height: 100vh;
        }

        .top-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .page-title {
            font-size: 25px;
            font-weight: 750;
            color: var(--navy);
            margin-bottom: 5px;
        }

        .page-description {
            color: var(--muted);
            font-size: 13px;
            margin: 0;
        }

        /* WELCOME */
        .welcome {
            position: relative;
            overflow: hidden;
            background: linear-gradient(120deg, #dceaff, #eeeafd);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .welcome h3 {
            color: var(--navy);
            font-size: 22px;
            font-weight: 750;
            margin-bottom: 9px;
        }

        .welcome p {
            color: #637793;
            font-size: 13px;
            max-width: 550px;
            margin: 0;
        }

        .welcome-icon {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 75px;
            color: rgba(36, 62, 101, .14);
        }

        /* BUTTON */
        .btn-primary-custom {
            background: var(--navy);
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 11px;
            font-size: 12px;
            font-weight: 600;
            border: none;
            transition: .25s;
        }

        .btn-primary-custom:hover {
            background: var(--navy-light);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23,43,77,.15);
        }

        /* STATISTICS */
        .stat-card {
            background: white;
            border: 1px solid #edf0f6;
            border-radius: 17px;
            padding: 22px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(23,43,77,.035);
            transition: .25s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(23,43,77,.08);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .icon-blue {
            background: #e4efff;
            color: #4b78b5;
        }

        .icon-purple {
            background: #eeeafd;
            color: #8372c7;
        }

        .icon-pink {
            background: #fceaf1;
            color: #c47c9c;
        }

        .stat-label {
            color: var(--muted);
            font-size: 12px;
            font-weight: 550;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 750;
            color: var(--navy);
            margin-bottom: 3px;
        }

        .stat-note {
            font-size: 11px;
            color: #a0aabb;
        }

        /* TABLE */
        .section-card {
            background: white;
            padding: 25px;
            border: 1px solid #edf0f6;
            border-radius: 17px;
            margin-top: 30px;
            box-shadow: 0 5px 20px rgba(23,43,77,.035);
        }

        .section-title {
            color: var(--navy);
            font-size: 16px;
            font-weight: 750;
        }

        .view-all {
            color: #6389bd;
            text-decoration: none;
            font-size: 12px;
            font-weight: 650;
        }

        .view-all:hover {
            color: var(--navy);
        }

        .table {
            margin-bottom: 0;
            font-size: 12px;
            color: var(--text);
        }

        .table thead th {
            background: #f5f7fc;
            color: #75849c;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .6px;
            padding: 14px 12px;
            border: none;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 15px 12px;
            border-color: #f0f2f7;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background: #f8faff;
        }

        .badge-internal {
            background: #e3edff;
            color: #4d73aa;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 10px;
        }

        .badge-eksternal {
            background: #f3eaff;
            color: #876bb6;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 10px;
        }

        /* FOOTER */
        .footer {
            color: #a0aabb;
            font-size: 11px;
            text-align: center;
            margin-top: 35px;
        }

        /* ACCOUNT MENU */
        .account-menu {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .account-button {
            display: flex;
            align-items: center;
            gap: 9px;
            background: white;
            border: 1px solid #e8edf5;
            border-radius: 12px;
            padding: 7px 12px;
            color: var(--navy);
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 3px 12px rgba(23,43,77,.04);
        }

        .account-button:hover {
            background: #f5f8fd;
        }

        .account-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            object-fit: cover;
            background: #dceaff;
        }

        .dropdown-menu {
            border: 1px solid #edf0f6;
            border-radius: 12px;
            padding: 8px;
            box-shadow: 0 8px 25px rgba(23,43,77,.10);
            min-width: 210px;
        }

        .dropdown-item {
            padding: 10px;
            font-size: 12px;
            border-radius: 8px;
        }

        .dropdown-item:hover {
            background: #f0f4fb;
        }

        /* RESPONSIVE */
        @media(max-width: 768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: relative;
                padding: 20px;
            }

            .brand {
                margin-bottom: 20px;
            }

            .main {
                margin-left: 0;
                padding: 22px 16px;
            }

            .welcome-icon {
                display: none;
            }

            .top-heading {
                align-items: flex-start;
                gap: 15px;
            }

            .account-menu {
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <!-- BRAND -->
        <div class="brand">

            <div class="brand-logo">
                <img src="{{ asset('images/logo-untan.png') }}"
                     alt="Logo Universitas Tanjungpura">
            </div>

            <div class="brand-text">
                <h5 class="brand-name">ARSIP UPT</h5>

                <div class="brand-subtitle">
                    Sistem Pengelolaan Arsip Surat
                </div>
            </div>

        </div>

        <!-- USER PROFILE -->
        <div class="user-profile">

            <div class="user-avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <div>
                <p class="user-name">{{ Auth::user()->name }}</p>
                <p class="user-role">{{ ucfirst(Auth::user()->role) }}</p>
            </div>

        </div>

        <!-- MENU UTAMA -->
        <div class="menu-label">MENU UTAMA</div>

        <a href="{{ route('dashboard') }}"
           class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">

            <span class="menu-icon">
                <i class="bi bi-grid-1x2-fill"></i>
            </span>

            <span>Dashboard</span>
        </a>

        <a href="{{ route('surat-masuk.index') }}"
           class="{{ request()->routeIs('surat-masuk.*') ? 'active' : '' }}">

            <span class="menu-icon">
                <i class="bi bi-envelope-paper-fill"></i>
            </span>

            <span>Surat Masuk</span>
        </a>

        <!-- PENGELOLAAN -->
        <div class="menu-label">PENGELOLAAN</div>

        <a href="{{ route('laporan') }}"
           class="{{ request()->routeIs('laporan') ? 'active' : '' }}">

            <span class="menu-icon">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
            </span>

            <span>Laporan Arsip</span>
        </a>

        <!-- LOGOUT -->
        <div class="logout">

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit">
                    <i class="bi bi-box-arrow-left me-2"></i>
                    Keluar dari Aplikasi
                </button>
            </form>

        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="main">

        <!-- HEADING -->
        <div class="top-heading">

            <div>
                <h4 class="page-title">Dashboard</h4>

                <p class="page-description">
                    Ringkasan informasi pengelolaan arsip surat.
                </p>
            </div>

            <div class="account-menu">

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('surat-masuk.create') }}"
                       class="btn-primary-custom">

                        <i class="bi bi-plus-lg me-1"></i>
                        Tambah Surat

                    </a>
                @endif

                <!-- ACCOUNT DROPDOWN -->
                <div class="dropdown">

                    <button class="account-button dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                        @if(auth()->user()->foto)

                            <img src="{{ asset('storage/' . auth()->user()->foto) }}"
                                 class="account-avatar"
                                 alt="Foto Profil">

                        @else

                            <span class="account-avatar d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-fill"></i>
                            </span>

                        @endif

                        <span>{{ auth()->user()->name }}</span>

                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <h6 class="dropdown-header">
                                Pengaturan Akun
                            </h6>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="bi bi-person-circle me-2"></i>
                                Profil Saya
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('password') }}">
                                <i class="bi bi-shield-lock me-2"></i>
                                Perbarui Kata Sandi
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button type="submit"
                                        class="dropdown-item text-danger">

                                    <i class="bi bi-box-arrow-left me-2"></i>
                                    Keluar

                                </button>
                            </form>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- WELCOME -->
        <div class="welcome">

            <h3>Selamat Datang di ARSIP UPT!</h3>

            <p>
                Sistem Informasi Pengelolaan Arsip Surat
                UPT TIK Universitas Tanjungpura.
                Kelola dan pantau arsip surat dengan lebih mudah.
            </p>

            <div class="welcome-icon">
                <i class="bi bi-archive-fill"></i>
            </div>

        </div>

        <!-- STATISTICS -->
        <div class="row g-4">

            <div class="col-md-4">
                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-label">
                            TOTAL SURAT MASUK
                        </span>

                        <div class="stat-icon icon-blue">
                            <i class="bi bi-envelope-paper"></i>
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $totalSurat }}
                    </div>

                    <div class="stat-note">
                        Seluruh arsip surat tersimpan
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-label">
                            SURAT INTERNAL
                        </span>

                        <div class="stat-icon icon-purple">
                            <i class="bi bi-building"></i>
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $totalInternal }}
                    </div>

                    <div class="stat-note">
                        Surat dari lingkungan UNTAN
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-label">
                            SURAT EKSTERNAL
                        </span>

                        <div class="stat-icon icon-pink">
                            <i class="bi bi-globe2"></i>
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $totalEksternal }}
                    </div>

                    <div class="stat-note">
                        Surat dari luar UNTAN
                    </div>

                </div>
            </div>

        </div>

        <!-- RECENT LETTERS -->
        <div class="section-card">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h5 class="section-title mb-1">

                        <i class="bi bi-clock-history me-2"></i>
                        Surat Terbaru

                    </h5>

                    <small class="text-secondary">
                        Daftar arsip surat yang baru ditambahkan.
                    </small>
                </div>

                <a href="{{ route('surat-masuk.index') }}"
                   class="view-all">

                    Lihat Semua
                    <i class="bi bi-arrow-right ms-1"></i>

                </a>

            </div>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Surat</th>
                            <th>Jenis</th>
                            <th>Asal Surat</th>
                            <th>Perihal</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($suratTerbaru as $surat)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td class="fw-semibold">
                                    {{ $surat->nomor_surat }}
                                </td>

                                <td>

                                    @if($surat->jenis_surat == 'Internal')

                                        <span class="badge badge-internal">
                                            Internal
                                        </span>

                                    @else

                                        <span class="badge badge-eksternal">
                                            Eksternal
                                        </span>

                                    @endif

                                </td>

                                <td>{{ $surat->asal_surat }}</td>

                                <td>{{ $surat->perihal }}</td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5"
                                    class="text-center text-secondary py-5">

                                    <i class="bi bi-inbox fs-2 d-block mb-2"></i>

                                    Belum ada data surat masuk.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        <!-- FOOTER -->
        <div class="footer">

            © ARSIP UPT TIK Universitas Tanjungpura

            <br>

            Sistem Informasi Pengelolaan Arsip Surat

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>