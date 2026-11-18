<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'KursusKu - Belajar Pemrograman')</title>

    <meta name="description"
          content="KursusKu adalah platform belajar pemrograman dari dasar hingga mahir.">

    <meta name="theme-color" content="#087c78">

    <!-- CSS UTAMA -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CSS EMBED UTAMA UNTUK FORMULIR & HALAMAN -->
    <style>
        .form-wrap {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .form-card {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(7, 94, 96, 0.08);
            overflow: hidden;
            border: 1px solid #e2ecec;
        }
        .form-banner {
            background: linear-gradient(120deg, #075e60, #118b83);
            padding: 40px 45px;
            color: #ffffff;
        }
        .form-banner span {
            display: inline-block;
            color: #ffbd38;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }
        .form-banner h1 {
            font-size: 32px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 8px;
        }
        .form-banner p {
            color: #e5ffff;
            font-size: 15px;
            line-height: 1.6;
        }
        .form-body {
            padding: 45px;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }
        .form-grid .full {
            grid-column: span 2;
        }
        .form-grid label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: #183b3b;
            margin-bottom: 8px;
        }
        .form-grid input,
        .form-grid select,
        .form-grid textarea {
            width: 100%;
            padding: 13px 16px;
            border: 1.5px solid #dce5e5;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #183b3b;
            background-color: #fbfdfd;
            transition: all 0.25s ease;
        }
        .form-grid input:focus,
        .form-grid select:focus,
        .form-grid textarea:focus {
            outline: none;
            border-color: #118b83;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(17, 139, 131, 0.12);
        }
        .form-actions {
            margin-top: 35px;
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .alert-err {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 22px;
            font-size: 14px;
        }
        .alert-ok {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 22px;
            font-size: 14px;
        }
        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-grid .full {
                grid-column: span 1;
            }
            .form-body {
                padding: 25px 20px;
            }
            .form-banner {
                padding: 30px 25px;
            }
        }
    </style>

    <!-- CSS TAMBAHAN SETIAP HALAMAN -->
    @stack('styles')
</head>

<body>

    <div class="page-frame">

        <!-- HEADER -->
        <header class="site-header">

            <!-- LOGO -->
            <a class="brand" href="{{ url('/') }}">
                <span class="brand-icon">🎓</span>

                <span>
                    Kursus<span class="brand-highlight">Ku</span>
                </span>
            </a>

            <!-- NAVIGASI -->
            <nav class="main-nav">

                <a href="{{ url('/') }}"
                   class="{{ request()->is('/') ? 'active' : '' }}">
                    Beranda
                </a>

                <a href="{{ url('/pendaftaran') }}"
                   class="{{ request()->is('pendaftaran') ? 'active' : '' }}">
                    Pendaftaran
                </a>

                <a href="{{ url('/#contoh') }}">
                    Contoh PHP
                </a>

                <a href="{{ url('/pendaftaran') }}" class="btn-pill">
                    Daftar Sekarang <span>→</span>
                </a>

            </nav>

        </header>

        <!-- KONTEN HALAMAN -->
        <div class="page-content">

            @yield('content')

        </div>

        <!-- FOOTER -->
        <footer class="site-footer">

            <div class="footer-content">

                <div class="footer-brand">
                    🎓 Kursus<span class="brand-highlight">Ku</span>
                </div>

                <p>
                    Belajar, berkembang, dan tingkatkan kemampuan
                    pemrogramanmu bersama KursusKu.
                </p>

                <div class="footer-links">
                    <a href="{{ url('/') }}">Beranda</a>
                    <a href="{{ url('/pendaftaran') }}">Pendaftaran</a>
                    <a href="{{ url('/#contoh') }}">Contoh PHP</a>
                </div>

                <div class="footer-line"></div>

                <small>
                    © {{ date('Y') ?> KursusKu.
                    Belajar dan berkembang bersama.
                </small>

            </div>

        </footer>

    </div>

    <!-- JAVASCRIPT TAMBAHAN -->
    @stack('scripts')

</body>
</html>