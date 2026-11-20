<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Arsip Surat - ARSIP UPT</title>

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

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 7px;
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

        /* FORM CARD */
        .form-card {
            background: white;
            border: 1px solid #edf0f6;
            border-radius: 17px;
            padding: 28px;
            box-shadow: 0 5px 20px rgba(30,50,80,.035);
        }

        .section-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 20px;
            padding-bottom: 13px;
            border-bottom: 1px solid #edf0f6;
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-title i {
            color: var(--blue);
            font-size: 17px;
        }

        .form-label {
            font-size: 12px;
            font-weight: 700;
            color: #52627a;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            padding: 11px 13px;
            border: 1px solid #e1e7f0;
            border-radius: 9px;
            font-size: 12px;
            color: var(--text);
            background-color: #fff;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(118,155,201,.13);
        }

        .form-control::placeholder {
            color: #aab4c2;
        }

        .form-control[readonly] {
            background: #f4f6fa;
            color: #64748b;
        }

        .form-text {
            font-size: 10px;
            color: var(--muted);
        }

        /* PDF */
        .pdf-info {
            background: #f0f6ff;
            border: 1px solid #e0eafa;
            border-radius: 10px;
            padding: 13px 15px;
            margin-bottom: 13px;
            font-size: 11px;
        }

        .pdf-info i {
            font-size: 17px;
            margin-right: 7px;
        }

        .upload-box {
            background: #f8faff;
            border: 1.5px dashed #b9cbe3;
            border-radius: 13px;
            padding: 23px;
            text-align: center;
        }

        .upload-icon {
            width: 48px;
            height: 48px;
            background: var(--blue-soft);
            color: #5c83b5;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin: 0 auto 12px;
        }

        .upload-box h6 {
            color: var(--navy);
            font-size: 13px;
            font-weight: 800;
        }

        .upload-box p {
            color: var(--muted);
            font-size: 11px;
            margin-bottom: 14px;
        }

        .upload-box .form-control {
            max-width: 450px;
            margin: auto;
            background: white;
        }

        /* BUTTON */
        .btn-save {
            background: var(--navy);
            color: white;
            border: none;
            border-radius: 9px;
            padding: 11px 20px;
            font-size: 12px;
            font-weight: 700;
            transition: .2s;
        }

        .btn-save:hover {
            background: var(--navy-light);
            color: white;
            transform: translateY(-1px);
        }

        .btn-back {
            background: #edf1f7;
            color: #52627a;
            border-radius: 9px;
            padding: 11px 20px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            transition: .2s;
        }

        .btn-back:hover {
            background: #e0e8f3;
            color: var(--navy);
        }

        .alert {
            font-size: 12px;
            border-radius: 10px;
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

            .brand-text,
            .profile-info,
            .menu-title,
            .menu-link span {
                display: none;
            }

            .brand-logo {
                width: 48px;
                height: 48px;
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

            .form-card {
                padding: 20px 15px;
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
            Edit Arsip
        </div>

        <div class="page-header">
            <h2>Edit Arsip Surat</h2>
            <p>Perbarui informasi surat yang sudah tersimpan dalam arsip digital.</p>
        </div>

        <div class="form-card">

            <form action="{{ route('surat-masuk.update', $suratMasuk->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- JENIS SURAT -->
                <h5 class="section-title">
                    <i class="bi bi-envelope-paper"></i>
                    Informasi Jenis Surat
                </h5>

                <div class="mb-4">

                    <label class="form-label">
                        Jenis Surat <span class="text-danger">*</span>
                    </label>

                    <select name="jenis_surat" class="form-select" required>

                        <option value="Internal"
                            {{ old('jenis_surat', $suratMasuk->jenis_surat) == 'Internal' ? 'selected' : '' }}>
                            Surat Masuk Internal
                        </option>

                        <option value="Eksternal"
                            {{ old('jenis_surat', $suratMasuk->jenis_surat) == 'Eksternal' ? 'selected' : '' }}>
                            Surat Masuk Eksternal
                        </option>

                    </select>

                </div>

                <!-- INFORMASI SURAT -->
                <h5 class="section-title">
                    <i class="bi bi-file-earmark-text"></i>
                    Informasi Surat
                </h5>

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">
                            Nomor Surat <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="nomor_surat"
                               class="form-control"
                               value="{{ old('nomor_surat', $suratMasuk->nomor_surat) }}"
                               placeholder="Masukkan nomor surat"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Asal Surat <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="asal_surat"
                               class="form-control"
                               value="{{ old('asal_surat', $suratMasuk->asal_surat) }}"
                               placeholder="Masukkan asal surat"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Tanggal Surat <span class="text-danger">*</span>
                        </label>

                        <input type="date"
                               name="tanggal_surat"
                               class="form-control"
                               value="{{ old('tanggal_surat', $suratMasuk->tanggal_surat) }}"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Tanggal Diterima <span class="text-danger">*</span>
                        </label>

                        <input type="date"
                               name="tanggal_diterima"
                               class="form-control"
                               value="{{ old('tanggal_diterima', $suratMasuk->tanggal_diterima) }}"
                               required>
                    </div>

                    <div class="col-12">
                        <label class="form-label">
                            Perihal Surat <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="perihal"
                               class="form-control"
                               value="{{ old('perihal', $suratMasuk->perihal) }}"
                               placeholder="Masukkan perihal surat"
                               required>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Tujuan Surat</label>

                        <input type="text"
                               name="tujuan"
                               class="form-control"
                               value="Kepala UPA TIK UNTAN"
                               readonly>
                    </div>

                    <div class="col-12">
                        <label class="form-label">
                            Penanda Tangan Surat <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="penanda_tangan"
                               class="form-control"
                               list="daftarPenandaTangan"
                               value="{{ old('penanda_tangan', $suratMasuk->penanda_tangan) }}"
                               placeholder="Ketik nama atau jabatan penanda tangan"
                               autocomplete="off"
                               required>

                        <datalist id="daftarPenandaTangan">

                            @foreach(\App\Models\SuratMasuk::whereNotNull('penanda_tangan')->where('penanda_tangan', '!=', '')->distinct()->pluck('penanda_tangan') as $nama)

                                <option value="{{ $nama }}">

                            @endforeach

                        </datalist>

                        <small class="form-text">
                            Pilih saran yang tersedia atau masukkan nama penanda tangan baru.
                        </small>
                    </div>

                </div>

                <!-- DOKUMEN DIGITAL -->
                <h5 class="section-title mt-4">
                    <i class="bi bi-cloud-arrow-up"></i>
                    Dokumen Digital
                </h5>

                <div class="upload-box">

                    <div class="upload-icon">
                        <i class="bi bi-file-earmark-pdf"></i>
                    </div>

                    <h6>Ganti Dokumen PDF</h6>

                    <p>
                        Unggah dokumen PDF baru jika ingin mengganti dokumen sebelumnya.
                    </p>

                    @if($suratMasuk->file_pdf)

                        <div class="pdf-info text-start">
                            <i class="bi bi-check-circle-fill text-success"></i>

                            <strong class="text-success">
                                Dokumen PDF sudah tersedia.
                            </strong>
                        </div>

                    @else

                        <div class="pdf-info text-start">
                            <i class="bi bi-info-circle-fill text-primary"></i>

                            <span class="text-secondary">
                                Belum ada dokumen PDF yang diunggah.
                            </span>
                        </div>

                    @endif

                    <input type="file"
                           name="file_pdf"
                           class="form-control"
                           accept=".pdf,application/pdf">

                    <small class="form-text d-block mt-2">
                        Format PDF, maksimal 5 MB. Kosongkan jika tidak ingin mengganti dokumen.
                    </small>

                </div>

                <!-- PESAN ERROR -->
                @if($errors->any())

                    <div class="alert alert-danger mt-4">

                        <strong>
                            <i class="bi bi-exclamation-circle me-1"></i>
                            Periksa kembali data yang dimasukkan:
                        </strong>

                        <ul class="mb-0 mt-2">

                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>

                @endif

                <!-- BUTTON -->
                <div class="d-flex justify-content-end gap-2 mt-4 flex-wrap">

                    <a href="{{ route('surat-masuk.index') }}" class="btn-back">
                        <i class="bi bi-arrow-left me-1"></i>
                        Batal
                    </a>

                    <button type="submit" class="btn-save">
                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

        <div class="footer">
            © {{ date('Y') }} ARSIP UPT TIK UNTAN. All Rights Reserved.
        </div>

    </main>

</body>
</html>