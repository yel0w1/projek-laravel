<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SIPAS UPT TIK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #f4f7f4;
            color: #263b31;
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            background: #244b3b;
            padding: 30px 20px;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px;
            margin-bottom: 45px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            background: #dcebdd;
            color: #244b3b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .brand h4 {
            font-size: 19px;
            font-weight: 800;
            margin: 0;
        }

        .brand small {
            color: #c4d5c9;
            font-size: 11px;
        }

        .menu-label {
            font-size: 11px;
            color: #a9c0b1;
            letter-spacing: 1.5px;
            margin: 25px 12px 12px;
            font-weight: 700;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 15px;
            margin-bottom: 7px;
            border-radius: 10px;
            text-decoration: none;
            color: #d5e1d8;
            font-size: 14px;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            background: #3d6651;
            color: white;
        }

        .menu-icon {
            font-size: 18px;
            width: 23px;
            text-align: center;
        }

        .sidebar-bottom {
            position: absolute;
            bottom: 25px;
            left: 20px;
            right: 20px;
            border-top: 1px solid #496b58;
            padding-top: 18px;
            font-size: 12px;
            color: #c4d5c9;
        }

        .main {
            margin-left: 260px;
            padding: 35px 40px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .topbar h2 {
            font-size: 25px;
            font-weight: 800;
            color: #244b3b;
        }

        .topbar p {
            color: #819087;
            font-size: 13px;
            margin-top: 5px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            padding: 9px 15px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,.03);
        }

        .profile-icon {
            width: 38px;
            height: 38px;
            background: #e4eee5;
            color: #315d43;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .profile strong {
            font-size: 13px;
        }

        .profile small {
            display: block;
            font-size: 11px;
            color: #8a968e;
        }

        .welcome {
            background: linear-gradient(110deg, #315d46, #527a5e);
            color: white;
            padding: 30px;
            border-radius: 18px;
            margin-bottom: 28px;
            position: relative;
            overflow: hidden;
        }

        .welcome h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .welcome p {
            color: #e0ebe1;
            font-size: 13px;
            margin: 0;
        }

        .welcome .decoration {
            position: absolute;
            right: 35px;
            top: 5px;
            font-size: 85px;
            opacity: .16;
        }

        .section-title {
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 17px;
            color: #294b39;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 22px;
            height: 100%;
            border: 1px solid #edf1ed;
            transition: .2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,.05);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .stat-icon {
            width: 43px;
            height: 43px;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .green { background: #e3f0e5; }
        .blue { background: #e5eef6; }
        .yellow { background: #f8f0dc; }
        .pink { background: #f5e9e7; }

        .stat-card h3 {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .stat-card p {
            font-size: 12px;
            color: #87938a;
            margin: 0;
        }

        .content-card {
            background: white;
            border-radius: 15px;
            padding: 23px;
            border: 1px solid #edf1ed;
            margin-top: 28px;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .content-header h5 {
            font-size: 16px;
            font-weight: 700;
            margin: 0;
        }

        .btn-add {
            background: #315d46;
            color: white;
            border: none;
            border-radius: 9px;
            padding: 10px 16px;
            font-size: 12px;
            text-decoration: none;
        }

        .btn-add:hover {
            background: #244b3b;
            color: white;
        }

        .table {
            font-size: 13px;
            vertical-align: middle;
        }

        .table thead th {
            background: #f4f7f4;
            color: #52675a;
            font-weight: 700;
            padding: 14px;
            border: none;
        }

        .table tbody td {
            padding: 16px 14px;
            color: #69766d;
        }

        .empty {
            text-align: center;
            padding: 35px !important;
            color: #9aa59d !important;
        }

        @media(max-width: 768px) {
            .sidebar {
                width: 75px;
                padding: 25px 10px;
            }

            .brand h4,
            .brand small,
            .menu-label,
            .menu-text,
            .sidebar-bottom {
                display: none;
            }

            .brand {
                justify-content: center;
            }

            .menu a {
                justify-content: center;
                padding: 14px 5px;
            }

            .main {
                margin-left: 75px;
                padding: 25px 15px;
            }

            .topbar {
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

<aside class="sidebar">

    <div class="brand">
        <div class="brand-icon">🌿</div>
        <div>
            <h4>SIPAS UPT</h4>
            <small>Pengelolaan Arsip Surat</small>
        </div>
    </div>

    <div class="menu-label">MENU UTAMA</div>

    <div class="menu">
        <a href="{{ route('dokumentasis.index') }}" class="active">
            <span class="menu-icon">⌂</span>
            <span class="menu-text">Dashboard</span>
        </a>

        <a href="#">
            <span class="menu-icon">📥</span>
            <span class="menu-text">Surat Masuk</span>
        </a>

        <a href="#">
            <span class="menu-icon">📤</span>
            <span class="menu-text">Surat Keluar</span>
        </a>
    </div>

    <div class="menu-label">PENGELOLAAN</div>

    <div class="menu">
        <a href="#">
            <span class="menu-icon">📁</span>
            <span class="menu-text">Semua Arsip</span>
        </a>

        <a href="#">
            <span class="menu-icon">📊</span>
            <span class="menu-text">Laporan Arsip</span>
        </a>
    </div>

    <div class="sidebar-bottom">
        Sistem Informasi Pengelolaan Arsip Surat<br>
        UPT TIK Universitas Tanjungpura
    </div>

</aside>


<main class="main">

    <div class="topbar">
        <div>
            <h2>Dashboard</h2>
            <p>Ringkasan pengelolaan arsip surat UPT TIK</p>
        </div>

        <div class="profile">
            <div class="profile-icon">👤</div>
            <div>
                <strong>Administrator</strong>
                <small>Pengelola Arsip</small>
            </div>
        </div>
    </div>


    <section class="welcome">
        <div class="decoration">🌿</div>
        <h3>Selamat Datang di Arsipan UPT</h3>
        <p>
            Sistem Informasi Pengelolaan Arsip Surat
            UPT Teknologi Informasi dan Komunikasi.
        </p>
    </section>


    <h5 class="section-title">Ringkasan Arsip</h5>

    <div class="row g-3">

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon green">📁</div>
                </div>
                <h3>{{ $dokumentasis->count() }}</h3>
                <p>Total Arsip Surat</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon blue">📥</div>
                </div>
                <h3>0</h3>
                <p>Surat Masuk</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon yellow">🏢</div>
                </div>
                <h3>0</h3>
                <p>Surat Internal</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon pink">🌐</div>
                </div>
                <h3>0</h3>
                <p>Surat Eksternal</p>
            </div>
        </div>

    </div>


    <section class="content-card">

        <div class="content-header">
            <h5>Arsip Terbaru</h5>

            <a href="{{ route('dokumentasis.create') }}" class="btn-add">
                + Tambah Arsip
            </a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Surat</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($dokumentasis as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->kategori }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>
                                <span class="badge bg-success">Tersimpan</span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="empty">
                                Belum ada arsip surat yang tersimpan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </section>

</main>

</body>
</html>