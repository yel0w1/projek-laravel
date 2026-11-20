<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Surat - ARSIP UPT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #172b4d;
            --navy-light: #243e65;
            --blue: #769bc9;
            --blue-soft: #e5eef9;
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
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
        }

        /* SIDEBAR */
        .sidebar {
            width: 225px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: var(--navy);
            padding: 25px 16px;
            color: white;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        /* LOGO UNTAN */
        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 7px;
            padding: 0 8px;
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
            display: flex;
            flex-direction: column;
        }

        .brand-name {
            font-size: 19px;
            font-weight: 750;
            letter-spacing: .5px;
            margin: 0;
        }

        .brand-subtitle {
            color: #b8c8df;
            font-size: 10px;
            margin: 0;
        }

        .profile {
            background: rgba(255,255,255,.08);
            border-radius: 12px;
            padding: 13px 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: #dceaff;
            color: var(--navy);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .profile-info {
            min-width: 0;
        }

        .profile-info strong {
            font-size: 12px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .profile-info small {
            color: #b9c9df;
            font-size: 10px;
        }

        .menu-title {
            font-size: 10px;
            color: #91a4c0;
            font-weight: 700;
            letter-spacing: 1px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 13px;
            margin-bottom: 6px;
            color: #c5d2e4;
            text-decoration: none;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 600;
            transition: .2s;
        }

        .menu-link i {
            font-size: 16px;
        }

        .menu-link:hover,
        .menu-link.active {
            background: #e5eef9;
            color: var(--navy);
        }

        .sidebar-bottom {
            margin-top: auto;
        }

        .logout-btn {
            width: 100%;
            border: none;
            background: rgba(255,255,255,.08);
            color: #dce5f1;
            padding: 12px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 600;
            text-align: left;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.16);
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 225px;
            padding: 35px 38px;
            min-height: 100vh;
        }

        .breadcrumb-custom {
            font-size: 11px;
            color: var(--muted);
            margin-bottom: 12px;
        }

        .breadcrumb-custom a {
            color: var(--blue);
            text-decoration: none;
        }

        .page-header {
            margin-bottom: 25px;
        }

        .page-header h2 {
            font-size: 24px;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 6px;
        }

        .page-header p {
            color: var(--muted);
            font-size: 13px;
            margin: 0;
        }

        /* DETAIL CARD */
        .detail-card {
            background: white;
            border: 1px solid #edf0f6;
            border-radius: 17px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(30,50,80,.035);
        }

        .card-header-custom {
            background: var(--navy);
            color: white;
            padding: 22px 26px;
        }

        .card-header-custom h5 {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .card-header-custom small {
            font-size: 11px;
            color: #c5d5eb;
        }

        .card-body-custom {
            padding: 28px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-title i {
            color: var(--blue);
            font-size: 17px;
        }

        .detail-item {
            background: #f9faff;
            border: 1px solid #edf1f7;
            border-radius: 11px;
            padding: 15px;
            height: 100%;
            min-height: 82px;
        }

        .detail-label {
            color: var(--muted);
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .detail-value {
            color: var(--navy);
            font-size: 13px;
            font-weight: 700;
            margin: 0;
            overflow-wrap: anywhere;
        }

        .badge-internal {
            background: #e5eef9;
            color: #41658f;
            padding: 6px 11px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 700;
        }

        .badge-eksternal {
            background: #eeeafd;
            color: #7565a8;
            padding: 6px 11px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 700;
        }

        /* PDF */
        .pdf-section {
            border-top: 1px solid #edf0f6;
            margin-top: 28px;
            padding-top: 25px;
        }

        .pdf-info {
            background: #f0f6ff;
            border: 1px solid #e0eafa;
            border-radius: 11px;
            padding: 13px 15px;
            font-size: 12px;
            color: #42658f;
            margin-bottom: 15px;
        }

        .pdf-frame {
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            overflow: hidden;
            background: #f4f6fa;
        }

        .pdf-frame iframe {
            display: block;
            width: 100%;
            height: 600px;
            border: none;
        }

        .no-pdf {
            background: #f8f9fc;
            border: 1px dashed #cbd5e1;
            border-radius: 12px;
            padding: 35px 20px;
            text-align: center;
        }

        .no-pdf i {
            font-size: 35px;
            color: #aab6c7;
        }

        .no-pdf p {
            color: var(--muted);
            font-size: 12px;
            margin: 10px 0 0;
        }

        /* BUTTON */
        .btn-back {
            background: #edf1f7;
            color: #52627a;
            border-radius: 9px;
            padding: 10px 17px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            transition: .2s;
        }

        .btn-back:hover {
            background: #e0e8f3;
            color: var(--navy);
        }

        .btn-pdf {
            background: var(--navy);
            color: white;
            border: none;
            border-radius: 9px;
            padding: 10px 16px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: .2s;
        }

        .btn-pdf:hover {
            background: var(--navy-light);
            color: white;
        }

        .btn-open {
            background: white;
            color: var(--navy);
            border: 1px solid #cbd7e8;
        }

        .btn-open:hover {
            background: var(--blue-soft);
            color: var(--navy);
        }

        .footer {
            color: #a0aaba;
            font-size: 10px;
            text-align: center;
            padding: 25px 0 5px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 20px 8px;
            }

            .brand {
                justify-content: center;
                padding: 0;
            }

            .brand-logo {
                width: 48px;
                height: 48px;
            }

            .brand-text,
            .profile-info,
            .menu-title,
            .menu-link span {
                display: none;
            }

            .profile {
                justify-content: center;
                padding: 8px 3px;
            }

            .menu-link {
                justify-content: center;
                padding: 13px 5px;
            }

            .logout-btn {
                text-align: center;
                padding: 12px 5px;
            }

            .logout-btn span {
                display: none;
            }

            .main-content {
                margin-left: 70px;
                padding: 25px 15px;
            }

            .card-body-custom {
                padding: 18px;
            }

            .pdf-frame iframe {
                height: 400px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

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

        <div class="profile">
            <div class="avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <div class="profile-info">
                <strong>{{ Auth::user()->name }}</strong>
                <small>{{ ucfirst(Auth::user()->role) }}</small>
            </div>
        </div>

        <div class="menu-title">MENU UTAMA</div>

        <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="bi bi-grid-1x2"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('surat-masuk.index') }}" class="menu-link active">
            <i class="bi bi-envelope-paper"></i>
            <span>Surat Masuk</span>
        </a>

        <a href="{{ route('laporan') }}" class="menu-link">
            <i class="bi bi-file-earmark-bar-graph"></i>
            <span>Laporan Arsip</span>
        </a>

        <div class="sidebar-bottom">
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-btn">
                    <i class="bi bi-box-arrow-left me-2"></i>
                    <span>Keluar</span>
                </button>
            </form>
        </div>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <div class="breadcrumb-custom">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <i class="bi bi-chevron-right mx-1"></i>
            <a href="{{ route('surat-masuk.index') }}">Surat Masuk</a>
            <i class="bi bi-chevron-right mx-1"></i>
            Detail Surat
        </div>

        <div class="page-header">
            <h2>Detail Arsip Surat</h2>
            <p>Informasi lengkap mengenai surat yang tersimpan dalam arsip digital.</p>
        </div>

        <div class="detail-card">

            <div class="card-header-custom">
                <h5>
                    <i class="bi bi-file-earmark-text me-2"></i>
                    Informasi Surat
                </h5>
                <small>ARSIP UPT TIK Universitas Tanjungpura</small>
            </div>

            <div class="card-body-custom">

                <h6 class="section-title">
                    <i class="bi bi-info-circle"></i>
                    Informasi Umum
                </h6>

                <div class="row g-3">

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Jenis Surat</p>
                            <p class="detail-value">
                                @if($suratMasuk->jenis_surat == 'Internal')
                                    <span class="badge-internal">
                                        <i class="bi bi-building me-1"></i>
                                        Internal
                                    </span>
                                @else
                                    <span class="badge-eksternal">
                                        <i class="bi bi-globe me-1"></i>
                                        Eksternal
                                    </span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Nomor Surat</p>
                            <p class="detail-value">
                                {{ $suratMasuk->nomor_surat }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Asal Surat</p>
                            <p class="detail-value">
                                {{ $suratMasuk->asal_surat }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Perihal Surat</p>
                            <p class="detail-value">
                                {{ $suratMasuk->perihal }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Tanggal Surat</p>
                            <p class="detail-value">
                                {{ $suratMasuk->tanggal_surat }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Tanggal Diterima</p>
                            <p class="detail-value">
                                {{ $suratMasuk->tanggal_diterima }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Tujuan Surat</p>
                            <p class="detail-value">
                                {{ $suratMasuk->tujuan ?? '-' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item">
                            <p class="detail-label">Penanda Tangan Surat</p>
                            <p class="detail-value">
                                {{ $suratMasuk->penanda_tangan ?? '-' }}
                            </p>
                        </div>
                    </div>

                </div>

                <!-- DOKUMEN PDF -->
                <div class="pdf-section">

                    <h6 class="section-title">
                        <i class="bi bi-file-earmark-pdf"></i>
                        Dokumen Digital
                    </h6>

                    @if($suratMasuk->file_pdf)

                        @php
                            $fileUrl = asset('storage/' . $suratMasuk->file_pdf);
                            $namaFile = 'Dokumen-Surat-' . $suratMasuk->id . '.pdf';
                        @endphp

                        <div class="pdf-info">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            Dokumen PDF tersedia dan dapat dibuka maupun diunduh.
                        </div>

                        <!-- TOMBOL AKSI DOKUMEN -->
                        <div class="d-flex flex-wrap gap-2 mb-3">

                            <a href="{{ $fileUrl }}"
                               download="{{ $namaFile }}"
                               class="btn-pdf">
                                <i class="bi bi-download me-1"></i>
                                Unduh Dokumen
                            </a>

                            <a href="{{ $fileUrl }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn-pdf btn-open">
                                <i class="bi bi-box-arrow-up-right me-1"></i>
                                Buka PDF
                            </a>

                        </div>

                        <!-- PRATINJAU FILE SURAT -->
                        <div class="pdf-frame">
                            <iframe
                                src="{{ $fileUrl }}"
                                title="Pratinjau Dokumen Surat">
                            </iframe>
                        </div>

                    @else

                        <div class="no-pdf">
                            <i class="bi bi-file-earmark-x"></i>
                            <p>
                                Belum ada dokumen PDF yang diunggah.
                            </p>
                        </div>

                    @endif

                </div>

                <!-- BUTTON KEMBALI -->
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('surat-masuk.index') }}" class="btn-back">
                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali ke Surat Masuk
                    </a>
                </div>

            </div>
        </div>

        <div class="footer">
            © {{ date('Y') }} ARSIP UPT TIK UNTAN. All Rights Reserved.
        </div>

    </main>

</body>
</html>