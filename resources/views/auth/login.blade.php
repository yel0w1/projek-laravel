<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - ARSIP UPT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--cream);
            font-family: Arial, sans-serif;
            padding: 25px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 950px;
            min-height: 550px;
            background: white;
            display: flex;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 12px 45px rgba(23, 43, 77, .09);
            border: 1px solid #edf0f5;
        }

        /* PANEL KIRI */

        .login-left {
            width: 45%;
            background: var(--navy);
            color: white;
            padding: 45px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: rgba(255,255,255,.045);
            top: -90px;
            right: -100px;
        }

        .login-left::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255,255,255,.04);
            bottom: -80px;
            left: -80px;
        }

        /* LOGO DAN BRAND */

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            z-index: 1;
        }

        .brand-icon {
            width: 80px;
            height: 80px;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            flex-shrink: 0;
        }

        .brand-icon img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .brand-name {
            font-size: 21px;
            font-weight: bold;
            letter-spacing: .5px;
        }

        .brand small {
            display: block;
            font-size: 10px;
            color: #b9c9df;
            margin-top: 2px;
        }

        /* ILUSTRASI */

        .illustration {
            text-align: center;
            position: relative;
            z-index: 1;
            padding: 20px 0;
        }

        .illustration-icon {
            width: 145px;
            height: 145px;
            background: rgba(229,238,249,.12);
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 28px;
            color: #dceaff;
            font-size: 75px;
        }

        .illustration h2 {
            font-size: 25px;
            font-weight: bold;
            line-height: 1.4;
        }

        .illustration p {
            color: #c2d0e2;
            font-size: 13px;
            line-height: 1.8;
            max-width: 300px;
            margin: 12px auto 0;
        }

        .left-footer {
            color: #b9c9df;
            font-size: 11px;
            position: relative;
            z-index: 1;
        }

        /* PANEL KANAN */

        .login-right {
            width: 55%;
            padding: 55px 65px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h3 {
            color: var(--navy);
            font-weight: bold;
            font-size: 27px;
            margin-bottom: 9px;
        }

        .welcome p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        .form-label {
            color: var(--text);
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .input-group {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            transition: .2s;
        }

        .input-group:focus-within {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(118,155,201,.12);
        }

        .input-group-text {
            background: white;
            border: none;
            color: var(--muted);
            padding-left: 14px;
        }

        .form-control {
            border: none;
            padding: 12px 10px;
            font-size: 13px;
            box-shadow: none !important;
        }

        .form-control:focus {
            border: none;
        }

        .form-control::placeholder {
            color: #b0bac8;
        }

        /* TOMBOL MATA PASSWORD */

        .toggle-password {
            background: white;
            border: none;
            color: var(--muted);
            padding: 0 15px;
            cursor: pointer;
            transition: .2s;
        }

        .toggle-password:hover {
            color: var(--navy);
        }

        .btn-login {
            background: var(--navy);
            color: white;
            padding: 13px;
            border-radius: 10px;
            font-weight: 600;
            border: none;
            width: 100%;
            font-size: 13px;
            transition: .2s;
        }

        .btn-login:hover {
            background: var(--navy-light);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(23,43,77,.15);
        }

        .login-note {
            background: #f1f5fb;
            color: #71829b;
            padding: 12px;
            border-radius: 9px;
            font-size: 11px;
            margin-top: 23px;
            line-height: 1.6;
        }

        .footer {
            color: #a0aabb;
            font-size: 11px;
            text-align: center;
            margin-top: 35px;
        }

        .alert {
            font-size: 12px;
            border-radius: 9px;
        }

        /* RESPONSIVE */

        @media(max-width: 768px) {
            .login-wrapper {
                max-width: 450px;
                min-height: auto;
            }

            .login-left {
                display: none;
            }

            .login-right {
                width: 100%;
                padding: 40px 30px;
            }

            .welcome h3 {
                font-size: 24px;
            }
        }

        @media(max-width: 400px) {
            body {
                padding: 12px;
            }

            .login-right {
                padding: 35px 22px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <!-- PANEL KIRI -->

        <div class="login-left">

            <!-- LOGO UNTAN DAN NAMA APLIKASI -->

            <div class="brand">

                <div class="brand-icon">
                    <img src="{{ asset('images/logo-untan.png') }}"
                         alt="Logo Universitas Tanjungpura">
                </div>

                <div>
                    <div class="brand-name">ARSIP UPT</div>
                    <small>Sistem Pengelolaan Arsip Surat</small>
                </div>

            </div>

            <!-- ILUSTRASI TENGAH -->

            <div class="illustration">

                <div class="illustration-icon">
                    <i class="bi bi-archive"></i>
                </div>

                <h2>
                    Kelola Arsip<br>
                    Lebih Mudah
                </h2>

                <p>
                    Sistem informasi pengelolaan arsip surat
                    UPT TIK Universitas Tanjungpura.
                    Praktis, teratur, dan mudah diakses.
                </p>

            </div>

            <div class="left-footer">
                © {{ date('Y') }} ARSIP UPT
            </div>

        </div>

        <!-- PANEL KANAN -->

        <div class="login-right">

            <div class="welcome">
                <h3>Selamat Datang!</h3>

                <p>
                    Silakan masuk menggunakan akun Anda
                    untuk mengakses sistem pengelolaan arsip.
                </p>
            </div>

            <!-- PESAN ERROR -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- PESAN SUKSES -->

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle me-2"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- FORM LOGIN -->

            <form
                action="{{ route('login.process') }}"
                method="POST"
                autocomplete="on"
                id="loginForm"
            >

                @csrf

                <!-- EMAIL -->

                <div class="mb-4">

                    <label class="form-label">
                        Email
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Masukkan email Anda"
                            value="{{ old('email') }}"
                            autocomplete="username"
                            autofocus
                        >

                    </div>

                </div>

                <!-- PASSWORD -->

                <div class="mb-4">

                    <label class="form-label">
                        Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                        >

                        <button
                            type="button"
                            class="toggle-password"
                            id="togglePassword"
                            aria-label="Tampilkan password"
                        >
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>

                    </div>

                </div>

                <!-- TOMBOL LOGIN -->

                <button type="submit" class="btn btn-login">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Masuk ke Sistem
                </button>

            </form>

            <div class="login-note">
                <i class="bi bi-shield-lock me-1"></i>
                Akses sistem hanya diberikan kepada
                pengguna yang memiliki akun terdaftar.
            </div>

            <div class="footer">
                © {{ date('Y') }} ARSIP UPT
                <br>
                UPT TIK Universitas Tanjungpura
            </div>

        </div>

    </div>

    <!-- JAVASCRIPT -->

    <script>

        // TAMPILKAN / SEMBUNYIKAN PASSWORD

        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {

            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';

                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');

                togglePassword.setAttribute(
                    'aria-label',
                    'Sembunyikan password'
                );

            } else {

                passwordInput.type = 'password';

                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');

                togglePassword.setAttribute(
                    'aria-label',
                    'Tampilkan password'
                );

            }

        });

        // POP-UP JIKA EMAIL ATAU PASSWORD KOSONG

        const loginForm = document.getElementById('loginForm');

        loginForm.addEventListener('submit', function (event) {

            const email = loginForm.querySelector('[name="email"]').value.trim();
            const password = passwordInput.value;

            if (email === '' || password.trim() === '') {

                event.preventDefault();

                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi Kesalahan!',
                    text: 'Terdapat kesalahan pada input Anda. Silakan periksa kembali.',
                    confirmButtonText: 'Mengerti',
                    confirmButtonColor: '#172b4d'
                });

            }

        });

    </script>

</body>
</html>