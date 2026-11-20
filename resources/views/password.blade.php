<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Kata Sandi - ARSIP UPT</title>

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

        .container-password {
            max-width: 650px;
            margin: 35px auto;
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

        /* CARD */
        .card-password {
            background: white;
            border: 1px solid #edf0f6;
            border-radius: 16px;
            padding: 35px;
            box-shadow: 0 5px 20px rgba(30,50,80,.035);
        }

        .back-link {
            color: #64748b;
            font-size: 13px;
            text-decoration: none;
            font-weight: 600;
        }

        .back-link:hover {
            color: var(--navy);
        }

        .icon-password {
            width: 65px;
            height: 65px;
            background: #e8eef8;
            color: var(--navy);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .title-password {
            color: var(--navy);
            font-size: 23px;
            font-weight: 800;
        }

        .description {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        /* FORM */
        .form-label {
            font-size: 13px;
            font-weight: 700;
            color: var(--text);
        }

        .form-control {
            padding: 11px 13px;
            font-size: 13px;
            border-color: #dce3ed;
        }

        .form-control:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(118,155,201,.13);
        }

        .toggle-password {
            background: white;
            border: 1px solid #dee2e6;
            border-left: none;
            color: #64748b;
            padding: 0 15px;
        }

        .toggle-password:hover {
            background: #f4f7fb;
            color: var(--navy);
        }

        .btn-primary {
            background: var(--navy);
            border: none;
            border-radius: 9px;
            padding: 12px 22px;
            font-size: 13px;
            font-weight: 700;
        }

        .btn-primary:hover {
            background: var(--navy-light);
        }

        .footer {
            color: #a0aaba;
            font-size: 10px;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 576px) {
            .container-password {
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

            .card-password {
                padding: 23px 18px;
            }

            .title-password {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container-password">

    <!-- BRAND LOGO -->
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

    <!-- CARD PASSWORD -->
    <div class="card-password">

        <a href="{{ route('profile') }}" class="back-link">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali ke Profil
        </a>

        <div class="mt-4">

            <div class="icon-password">
                <i class="bi bi-shield-lock"></i>
            </div>

            <h3 class="title-password">Perbarui Kata Sandi</h3>

            <p class="description">
                Gunakan kata sandi baru untuk menjaga keamanan akun ARSIP UPT.
            </p>

        </div>

        @if(session('success'))
            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">

            @csrf
            @method('PUT')

            <!-- PASSWORD LAMA -->
            <div class="mb-3">

                <label class="form-label">Kata Sandi Lama</label>

                <div class="input-group">

                    <input type="password"
                           name="password_lama"
                           class="form-control"
                           id="password_lama"
                           placeholder="Masukkan kata sandi lama"
                           required>

                    <button type="button"
                            class="btn toggle-password"
                            onclick="togglePassword('password_lama', this)">
                        <i class="bi bi-eye"></i>
                    </button>

                </div>

            </div>

            <!-- PASSWORD BARU -->
            <div class="mb-3">

                <label class="form-label">Kata Sandi Baru</label>

                <div class="input-group">

                    <input type="password"
                           name="password"
                           class="form-control"
                           id="password_baru"
                           placeholder="Minimal 8 karakter"
                           required>

                    <button type="button"
                            class="btn toggle-password"
                            onclick="togglePassword('password_baru', this)">
                        <i class="bi bi-eye"></i>
                    </button>

                </div>

            </div>

            <!-- KONFIRMASI PASSWORD -->
            <div class="mb-4">

                <label class="form-label">Konfirmasi Kata Sandi Baru</label>

                <div class="input-group">

                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           id="password_konfirmasi"
                           placeholder="Ulangi kata sandi baru"
                           required>

                    <button type="button"
                            class="btn toggle-password"
                            onclick="togglePassword('password_konfirmasi', this)">
                        <i class="bi bi-eye"></i>
                    </button>

                </div>

            </div>

            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-check-circle me-1"></i>
                Simpan Kata Sandi Baru
            </button>

        </form>

    </div>

    <div class="footer">
        © {{ date('Y') }} ARSIP UPT TIK UNTAN. All Rights Reserved.
    </div>

</div>

<script>
    function togglePassword(inputId, button) {
        const input = document.getElementById(inputId);
        const icon = button.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>

</body>
</html>