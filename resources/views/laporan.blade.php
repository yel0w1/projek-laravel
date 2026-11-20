<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan Arsip - ARSIP UPT</title>

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
            background: var(--cream);
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--text);
            margin: 0;
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

        .page-title {
            font-size: 25px;
            font-weight: 750;
            color: var(--navy);
        }

        .page-description {
            color: var(--muted);
            font-size: 13px;
        }

        /* CONTENT CARD */
        .content-card {
            background: white;
            width: 100%;
            padding: 27px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(23,43,77,.035);
            border: 1px solid #edf0f6;
        }

        /* BUTTON */
        .btn-print {
            background: var(--navy);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 11px 17px;
            font-size: 12px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-print:hover {
            background: var(--navy-light);
            color: white;
        }

        /* FORM */
        .form-control,
        .form-select {
            border: 1px solid #e5eaf2;
            border-radius: 10px;
            padding: 11px 13px;
            font-size: 12px;
            color: var(--text);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(118,155,201,.12);
        }

        /* JUDUL LAPORAN */
        .report-title {
            color: var(--navy);
            letter-spacing: .5px;
            font-size: 20px;
        }

        .report-subtitle {
            color: var(--muted);
            font-size: 13px;
        }

        .report-divider {
            border-color: #dce4ef;
            opacity: 1;
        }

        /* TABLE */
        .table {
            font-size: 12px;
            color: var(--text);
            margin-bottom: 0;
        }

        .table thead th {
            background: #f5f7fc;
            color: #75849c;
            font-weight: 700;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: .5px;
            padding: 15px 12px;
            border-color: #edf0f5;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 15px 12px;
            border-color: #edf0f5;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background: #f7f9fd;
        }

        .badge-internal {
            background: #e3edff;
            color: #4d73aa;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 650;
        }

        .badge-eksternal {
            background: #f3eaff;
            color: #876bb6;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 650;
        }

        /* TOTAL */
        .total-box {
            background: #f4f7fc;
            border: 1px solid #e7edf5;
            padding: 13px 16px;
            border-radius: 10px;
            font-size: 12px;
            color: var(--text);
        }

        .total-box strong {
            color: var(--navy);
        }

        .print-date {
            color: var(--muted);
            font-size: 11px;
        }

        .footer {
            text-align: center;
            color: #a0aabb;
            font-size: 11px;
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

            .content-card {
                padding: 18px;
            }
        }

        /* PENGATURAN CETAK */
        @page {
            size: A4 landscape;
            margin: 15mm;
        }

        @media print {
            body {
                background: white !important;
                font-family: "Times New Roman", serif;
                color: black !important;
                font-size: 12px;
            }

            .sidebar,
            .no-print,
            .btn,
            .footer {
                display: none !important;
            }

            .main {
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
                min-height: auto !important;
            }

            .content-card {
                width: 100% !important;
                padding: 0 !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
            }

            .report-title {
                color: black !important;
                font-size: 18px !important;
            }

            .report-subtitle {
                color: black !important;
            }

            .table-responsive {
                overflow: visible !important;
            }

            table {
                width: 100% !important;
                font-size: 10px !important;
                border-collapse: collapse !important;
            }

            th,
            td {
                padding: 7px !important;
                border: 1px solid #333 !important;
                color: black !important;
            }

            thead {
                display: table-header-group;
            }

            tr {
                page-break-inside: avoid;
            }

            .table thead th {
                background: #e5e5e5 !important;
                color: black !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .badge-internal,
            .badge-eksternal {
                background: white !important;
                color: black !important;
                border: 1px solid #777 !important;
            }

            .total-box {
                background: white !important;
                border: none !important;
                padding-left: 0 !important;
            }

            .print-date {
                color: black !important;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar no-print">

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

        <div class="d-flex justify-content-between align-items-center mb-4 no-print">
            <div>
                <h3 class="page-title mb-1">
                    Laporan Arsip
                </h3>

                <p class="page-description mb-0">
                    Rekapitulasi data surat masuk ARSIP UPT.
                </p>
            </div>

            <button onclick="window.print()" class="btn btn-print">
                <i class="bi bi-printer me-2"></i>
                Cetak Laporan
            </button>
        </div>

        <div class="content-card">

            <!-- JUDUL LAPORAN -->
            <div class="text-center mb-4">
                <h4 class="report-title fw-bold">
                    LAPORAN ARSIP SURAT MASUK
                </h4>

                <p class="report-subtitle mb-2">
                    UPT TIK Universitas Tanjungpura
                </p>

                <hr class="report-divider">
            </div>

            <!-- PENCARIAN DAN FILTER -->
            <div class="row mb-4 no-print">

                <div class="col-md-6 mb-2">
                    <input
                        type="text"
                        id="searchLaporan"
                        class="form-control"
                        placeholder="Cari nomor, asal, atau perihal surat..."
                    >
                </div>

                <div class="col-md-4 mb-2">
                    <select id="filterLaporan" class="form-select">
                        <option value="">Semua Jenis Surat</option>
                        <option value="internal">Internal</option>
                        <option value="eksternal">Eksternal</option>
                    </select>
                </div>

            </div>

            <!-- TABEL LAPORAN -->
            <div class="table-responsive">

                <table class="table table-bordered align-middle"
                       id="tabelLaporan">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Surat</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Tanggal Diterima</th>
                            <th>Asal Surat</th>
                            <th>Perihal</th>
                            <th>Penanda Tangan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($suratMasuks as $surat)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $surat->nomor_surat }}
                                </td>

                                <td>
                                    @if($surat->jenis_surat == 'Internal')
                                        <span class="badge-internal">
                                            Internal
                                        </span>
                                    @else
                                        <span class="badge-eksternal">
                                            Eksternal
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($surat->tanggal_surat)->format('d-m-Y') }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($surat->tanggal_diterima)->format('d-m-Y') }}
                                </td>

                                <td>
                                    {{ $surat->asal_surat }}
                                </td>

                                <td>
                                    {{ $surat->perihal }}
                                </td>

                                <td>
                                    {{ $surat->penanda_tangan ?? '-' }}
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <i class="bi bi-inbox fs-3 d-block mb-2 text-secondary"></i>
                                    Belum ada data arsip surat.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <!-- TOTAL ARSIP -->
            <div class="total-box mt-4">
                <i class="bi bi-archive me-2"></i>
                Total arsip surat:

                <strong>
                    {{ $suratMasuks->count() }} surat
                </strong>
            </div>

            <!-- TANGGAL CETAK -->
            <div class="text-end mt-4">
                <small class="print-date">
                    Dicetak pada:
                    {{ date('d-m-Y') }}
                </small>
            </div>

        </div>

        <div class="footer">
            © {{ date('Y') }} ARSIP UPT - Sistem Pengelolaan Arsip Surat
        </div>

    </div>

    <!-- JAVASCRIPT -->
    <script>
        const searchLaporan = document.getElementById('searchLaporan');
        const filterLaporan = document.getElementById('filterLaporan');

        function filterData() {
            let keyword = searchLaporan.value.toLowerCase();
            let jenis = filterLaporan.value.toLowerCase();

            document.querySelectorAll('#tabelLaporan tbody tr').forEach(row => {
                let isi = row.innerText.toLowerCase();

                let cocokCari = isi.includes(keyword);
                let cocokJenis = jenis === '' || isi.includes(jenis);

                row.style.display = cocokCari && cocokJenis ? '' : 'none';
            });
        }

        searchLaporan.addEventListener('keyup', filterData);
        filterLaporan.addEventListener('change', filterData);
    </script>

</body>
</html>