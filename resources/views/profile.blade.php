<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - ARSIP UPT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #172b4d;
            --navy-light: #243e65;
            --blue: #769bc9;
            --cream: #f8f9fc;
            --text: #34445d;
            --muted: #8996a9;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: var(--cream);
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            margin: 0;
        }

        .container-profile {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* BRAND */
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .brand-logo {
            width: 65px;
            height: 65px;
            flex-shrink: 0;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text h5 {
            color: var(--navy);
            font-size: 20px;
            font-weight: 800;
            margin: 0;
            letter-spacing: .5px;
        }

        .brand-text p {
            color: var(--muted);
            font-size: 12px;
            margin: 3px 0 0;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h3 {
            color: var(--navy);
            font-size: 23px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .header p {
            font-size: 13px;
        }

        .btn-back {
            background: white;
            color: var(--navy);
            border: 1px solid #dce4ef;
            border-radius: 9px;
            padding: 10px 16px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #edf3fb;
            color: var(--navy);
        }

        /* CARD */
        .card-profile {
            background: white;
            border: 1px solid #edf0f6;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(30,50,80,.035);
            margin-bottom: 22px;
        }

        .photo {
            width: 115px;
            height: 115px;
            border-radius: 50%;
            object-fit: cover;
            background: #e8edf5;
            border: 4px solid #e8edf5;
        }

        .photo-default {
            width: 115px;
            height: 115px;
            border-radius: 50%;
            background: #e8edf5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            color: #60738e;
            margin: auto;
        }

        .profile-name {
            font-size: 22px;
            font-weight: 800;
            color: var(--navy);
            margin-top: 15px;
        }

        .profile-email {
            color: var(--muted);
            font-size: 13px;
        }

        .profile-badge {
            background: #e5eef9;
            color: #41658f;
            font-size: 11px;
            padding: 7px 13px;
            border-radius: 7px;
            font-weight: 700;
        }

        /* INFORMASI AKUN */
        .card-title {
            color: var(--navy);
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 22px;
        }

        .info-item {
            padding: 14px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            color: var(--muted);
            font-size: 12px;
        }

        .info-value {
            color: var(--navy);
            font-size: 13px;
            font-weight: 700;
            margin-top: 5px;
        }

        /* FORM */
        .form-label {
            color: var(--text);
            font-size: 13px;
            font-weight: 700;
        }

        .form-control {
            border: 1px solid #dce3ed;
            border-radius: 9px;
            padding: 11px 13px;
            font-size: 13px;
        }

        .form-control:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(118,155,201,.13);
        }

        .form-control:disabled {
            background: #f4f6fa;
        }

        .form-text {
            font-size: 11px;
        }

        .btn-primary {
            background: var(--navy);
            border: none;
            border-radius: 9px;
            padding: 11px 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .btn-primary:hover {
            background: var(--navy-light);
        }

        .btn-password {
            background: white;
            color: var(--navy);
            border: 1px solid #cbd7e8;
            border-radius: 9px;
            padding: 11px 18px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
        }

        .btn-password:hover {
            background: #edf3fb;
            color: var(--navy);
        }

        .footer {
            text-align: center;
            color: #a0aaba;
            font-size: 10px;
            padding: 15px 0 25px;
        }

        @media (max-width: 576px) {
            .container-profile {
                margin-top: 20px;
                padding: 0 15px;
            }

            .brand-logo {
                width: 55px;
                height: 55px;
            }

            .brand-text h5 {
                font-size: 17px;
            }

            .brand-text p {
                font-size: 10px;
            }

            .header {
                align-items: flex-start;
                gap: 12px;
                flex-direction: column;
            }

            .card-profile {
                padding: 22px 18px;
            }
        }
    </style>
</head>

<body>

<div class="container-profile">

    <!-- LOGO DAN BRAND -->
    <div class="brand">
        <div class="brand-logo">
            <img src="{{ asset('images/logo-untan.png') }}"
                 alt="Logo Universitas Tanjungpura">
        </div>

        <div class="brand-text">
            <h5>ARSIP UPT</h5>
            <p>Sistem Pengelolaan Arsip Surat</p>
        </div>
    </div>

    <!-- HEADER -->
    <div class="header">
        <div>
            <h3>Profil Pengguna</h3>
            <p class="text-muted mb-0">Informasi akun ARSIP UPT</p>
        </div>

        <a href="{{ route('dashboard') }}" class="btn-back">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            Periksa kembali data yang kamu masukkan.
        </div>
    @endif

    <!-- PROFIL PENGGUNA -->
    <div class="card-profile text-center">

        @if($user->foto)
            <img src="{{ asset('storage/' . $user->foto) }}"
                 class="photo"
                 alt="Foto Profil">
        @else
            <div class="photo-default">
                <i class="bi bi-person"></i>
            </div>
        @endif

        <div class="profile-name">{{ $user->name }}</div>
        <div class="profile-email">{{ $user->email }}</div>

        <span class="profile-badge d-inline-block mt-2">
            {{ ucfirst($user->role ?? 'Pengguna') }}
        </span>

    </div>

    <!-- INFORMASI AKUN -->
    <div class="card-profile">

        <h5 class="card-title">
            <i class="bi bi-person-lines-fill me-2"></i>
            Informasi Akun
        </h5>

        <div class="info-item">
            <div class="info-label">Nama Lengkap</div>
            <div class="info-value">{{ $user->name }}</div>
        </div>

        <div class="info-item">
            <div class="info-label">Email</div>
            <div class="info-value">{{ $user->email }}</div>
        </div>

        <div class="info-item">
            <div class="info-label">Nomor WhatsApp</div>
            <div class="info-value">{{ $user->whatsapp ?: '-' }}</div>
        </div>

        <div class="info-item">
            <div class="info-label">Terakhir Login</div>
            <div class="info-value">
                {{ $user->last_login_at ? $user->last_login_at->format('d M Y, H:i') : 'Belum tersedia' }}
            </div>
        </div>

        <div class="info-item">
            <div class="info-label">Terakhir Diperbarui</div>
            <div class="info-value">
                {{ $user->updated_at->format('d M Y, H:i') }}
            </div>
        </div>

    </div>

    <!-- PERBARUI PROFIL -->
    <div class="card-profile">

        <h5 class="card-title">
            <i class="bi bi-pencil-square me-2"></i>
            Perbarui Profil
        </h5>

        <form action="{{ route('profile.update') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ old('name', $user->name) }}"
                       required>

                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>

                <input type="email"
                       class="form-control"
                       value="{{ $user->email }}"
                       disabled>

                <small class="text-muted form-text">
                    Email tidak dapat diubah.
                </small>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor WhatsApp</label>

                <input type="text"
                       name="whatsapp"
                       class="form-control"
                       value="{{ old('whatsapp', $user->whatsapp) }}"
                       placeholder="Contoh: 081234567890">

                @error('whatsapp')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Foto Profil</label>

                <input type="file"
                       name="foto"
                       class="form-control"
                       accept="image/png,image/jpeg">

                <small class="text-muted form-text">
                    Format JPG atau PNG, maksimal 2 MB.
                </small>

                @error('foto')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save me-1"></i>
                Simpan Perubahan
            </button>

        </form>

    </div>

    <!-- PERBARUI KATA SANDI -->
    <div class="text-center mb-4">
        <a href="{{ route('password') }}" class="btn-password">
            <i class="bi bi-shield-lock me-1"></i>
            Perbarui Kata Sandi
        </a>
    </div>

    <div class="footer">
        © {{ date('Y') }} ARSIP UPT TIK UNTAN. All Rights Reserved.
    </div>

</div>

</body>
</html>