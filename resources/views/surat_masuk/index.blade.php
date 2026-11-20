<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat Masuk - ARSIP UPT</title>

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
            box-shadow: 5px 0 25px rgba(23,43,77,.08);
        }

        /* BRAND */
        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
            margin-bottom: 48px;
        }

        .brand-logo {
            width: 85px;
            height: 95px;
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
            display: flex;
            flex-direction: column;
        }

        .brand-name {
            font-size: 19px;
            font-weight: 750;
            letter-spacing: .3px;
            margin: 0 0 5px;
            white-space: nowrap;
        }

        .brand-subtitle {
            color: #b8c8df;
            font-size: 10px;
            line-height: 1.6;
            margin: 0;
            width: 105px;
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
            flex-shrink: 0;
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
            gap: 15px;
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

        /* CONTENT CARD */
        .content-card {
            background: white;
            padding: 26px;
            border-radius: 20px;
            border: 1px solid #edf0f6;
            box-shadow: 0 5px 20px rgba(23,43,77,.035);
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .content-header h5 {
            color: var(--navy);
            font-size: 17px;
            font-weight: 750;
            margin-bottom: 5px;
        }

        .content-header p {
            color: var(--muted);
            font-size: 12px;
            margin: 0;
        }

        /* BUTTON */
        .btn-add {
            background: var(--navy);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 11px 17px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
            transition: .25s;
        }

        .btn-add:hover {
            background: var(--navy-light);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23,43,77,.15);
        }

        /* SEARCH */
        .search-box,
        .filter-box {
            width: 100%;
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            padding: 11px 13px;
            font-size: 12px;
            color: var(--text);
            background-color: white;
            outline: none;
        }

        .search-box:focus,
        .filter-box:focus {
            border-color: #91afd5;
            box-shadow: 0 0 0 3px rgba(118,155,201,.12);
        }

        /* TABLE */
        .table {
            margin-bottom: 0;
            font-size: 12px;
            color: var(--text);
            vertical-align: middle;
        }

        .table thead th {
            background: #f5f7fc;
            color: #75849c;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            padding: 15px 12px;
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
            font-weight: 650;
        }

        .badge-external {
            background: #f3eaff;
            color: #876bb6;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 650;
        }

        /* ACTION BUTTONS */
        .btn-detail {
            background: #e5eef9;
            color: #4b78b5;
            border: none;
        }

        .btn-edit {
            background: #fff2d9;
            color: #b58a3d;
            border: none;
        }

        .btn-delete {
            background: #fde9ec;
            color: #c16c7b;
            border: none;
        }

        .btn-detail,
        .btn-edit,
        .btn-delete {
            border-radius: 8px;
            padding: 6px 10px;
            font-size: 11px;
            font-weight: 650;
            text-decoration: none;
            transition: .2s;
            white-space: nowrap;
        }

        .btn-detail:hover {
            background: #d2e3f8;
            color: #345d91;
        }

        .btn-edit:hover {
            background: #ffe6b5;
            color: #936a24;
        }

        .btn-delete:hover {
            background: #f8d4da;
            color: #a64b5b;
        }

        .empty {
            text-align: center;
            padding: 45px !important;
            color: var(--muted) !important;
        }

        /* FOOTER */
        .footer {
            color: #a0aabb;
            font-size: 11px;
            text-align: center;
            margin-top: 35px;
            line-height: 1.7;
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
                margin-bottom: 25px;
            }

            .main {
                margin-left: 0;
                padding: 22px 16px;
            }

            .top-heading {
                align-items: flex-start;
            }

            .content-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .btn-add {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

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

        <div class="user-profile">
            <div class="user-avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <div>
                <p class="user-name">{{ Auth::user()->name }}</p>
                <p class="user-role">{{ ucfirst(Auth::user()->role) }}</p>
            </div>
        </div>

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

        <div class="menu-label">PENGELOLAAN</div>

        <a href="{{ route('laporan') }}"
           class="{{ request()->routeIs('laporan') ? 'active' : '' }}">
            <span class="menu-icon">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
            </span>
            <span>Laporan Arsip</span>
        </a>

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

        <div class="top-heading">
            <div>
                <h4 class="page-title">Arsip Surat Masuk</h4>
                <p class="page-description">
                    Kelola dan pantau seluruh arsip surat masuk UPT TIK.
                </p>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
            </div>
        @endif

        <section class="content-card">

            <div class="content-header">
                <div>
                    <h5>
                        <i class="bi bi-envelope-paper me-2"></i>
                        Daftar Surat Masuk
                    </h5>

                    <p>
                        Seluruh arsip surat masuk internal dan eksternal.
                    </p>
                </div>

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('surat-masuk.create') }}" class="btn-add">
                        <i class="bi bi-plus-lg me-1"></i>
                        Tambah Arsip Surat
                    </a>
                @endif
            </div>

            <!-- SEARCH AND FILTER -->
            <div class="row mb-4">

                <div class="col-md-8 mb-2">
                    <div class="position-relative">
                        <i class="bi bi-search position-absolute"
                           style="left:13px; top:12px; color:#8996a9;"></i>

                        <input type="text"
                               id="search"
                               class="search-box"
                               style="padding-left:36px;"
                               placeholder="Cari nomor, asal, atau perihal surat...">
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <select id="filterJenis" class="filter-box">
                        <option value="">Semua Jenis Surat</option>
                        <option value="internal">Surat Internal</option>
                        <option value="eksternal">Surat Eksternal</option>
                    </select>
                </div>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table align-middle" id="suratTable">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Surat</th>
                            <th>Jenis Surat</th>
                            <th>Asal Surat</th>
                            <th>Perihal</th>
                            <th>Penanda Tangan</th>
                            <th>Tanggal Diterima</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($suratMasuks as $index => $surat)

                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td class="fw-semibold" style="color:#34445d;">
                                    {{ $surat->nomor_surat }}
                                </td>

                                <td>
                                    @if($surat->jenis_surat == 'Internal')
                                        <span class="badge badge-internal">
                                            Internal
                                        </span>
                                    @else
                                        <span class="badge badge-external">
                                            Eksternal
                                        </span>
                                    @endif
                                </td>

                                <td>{{ $surat->asal_surat }}</td>

                                <td>{{ $surat->perihal }}</td>

                                <td>{{ $surat->penanda_tangan ?? '-' }}</td>

                                <td>{{ $surat->tanggal_diterima }}</td>

                                <td>
                                    <div class="d-flex gap-2">

                                        <a href="{{ route('surat-masuk.show', $surat->id) }}"
                                           class="btn-detail">
                                            <i class="bi bi-eye me-1"></i>
                                            Detail
                                        </a>

                                        @if(auth()->user()->role === 'admin')

                                            <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                                               class="btn-edit">
                                                <i class="bi bi-pencil me-1"></i>
                                                Edit
                                            </a>

                                            <form action="{{ route('surat-masuk.destroy', $surat->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Apakah kamu yakin ingin menghapus arsip surat ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn-delete">
                                                    <i class="bi bi-trash me-1"></i>
                                                    Hapus
                                                </button>

                                            </form>

                                        @endif

                                    </div>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="empty">
                                    <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                                    Belum ada arsip surat masuk.
                                    <br>
                                    Silakan tambahkan arsip surat baru.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>

        <div class="footer">
            © ARSIP UPT TIK Universitas Tanjungpura
            <br>
            Sistem Informasi Pengelolaan Arsip Surat
        </div>

    </div>

    <!-- SEARCH SCRIPT -->
    <script>
        const searchInput = document.getElementById('search');
        const filterJenis = document.getElementById('filterJenis');

        function filterSurat() {
            let keyword = searchInput.value.toLowerCase();
            let jenis = filterJenis.value.toLowerCase();

            let rows = document.querySelectorAll('#suratTable tbody tr');

            rows.forEach(function(row) {
                let isiBaris = row.innerText.toLowerCase();

                let cocokCari = isiBaris.includes(keyword);
                let cocokJenis = jenis === '' || isiBaris.includes(jenis);

                row.style.display = cocokCari && cocokJenis ? '' : 'none';
            });
        }

        searchInput.addEventListener('keyup', filterSurat);
        filterJenis.addEventListener('change', filterSurat);
    </script>

</body>
</html>