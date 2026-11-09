
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $siteName }} - Belajar Pemrograman</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>

        
/* KURSUS POPULER */
.popular-courses {
    max-width: 1200px;
    margin: 65px auto;
    padding: 0 22px;
}

.course-heading {
    margin-bottom: 25px;
}

.course-heading h2 {
    font-size: 30px;
    color: #10245c;
    margin-bottom: 10px;
}

.course-heading p {
    color: #64748b;
    line-height: 1.7;
}

.course-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.course-card {
    background: white;
    border: 1px solid #e1e9fa;
    border-radius: 17px;
    overflow: hidden;
    box-shadow: 0 5px 16px rgba(20, 60, 130, .09);
    transition: .25s;
}

.course-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(20, 60, 130, .15);
}

.course-image {
    min-height: 155px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 38px;
    font-weight: bold;
}

.php-image {
    background: #eeeaff;
    color: #6551b5;
}

.mysql-image {
    background: #e6f4ff;
    color: #0876bf;
}

.laravel-image {
    background: #fff0ed;
    color: #e74432;
}

.course-content {
    padding: 22px;
}

.course-content h3 {
    font-size: 21px;
    margin-bottom: 12px;
    color: #10245c;
}

.course-content p {
    color: #64748b;
    line-height: 1.7;
    min-height: 75px;
    margin-bottom: 18px;
}

.course-button {
    display: block;
    text-align: center;
    padding: 13px;
    border-radius: 9px;
    background: #0645e8;
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.course-button:hover {
    background: #0835b0;
}

@media (max-width: 750px) {
    .course-list {
        grid-template-columns: 1fr;
    }
}

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f8ff;
            color: #10245c;
        }

        /* NAVBAR */
        .navbar {
            min-height: 75px;
            padding: 14px 5%;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            box-shadow: 0 3px 15px rgba(0,0,0,.07);
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            color: #0645d8;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-menu a {
            color: #10245c;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu a:hover {
            color: #0755ed;
        }

        .nav-button {
            background: #0645e8;
            color: white !important;
            padding: 12px 20px;
            border-radius: 25px;
        }

        /* HERO */
        .hero {
            min-height: 390px;
            padding: 55px 8%;
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            align-items: center;
            gap: 40px;
            color: white;
            background: linear-gradient(120deg, #071c68, #0755e8, #2493ff);
            overflow: hidden;
        }

        .hero h1 {
            font-size: clamp(34px, 5vw, 58px);
            line-height: 1.12;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #ffc928;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 25px;
            color: #e5edff;
        }

        .btn-primary {
            display: inline-block;
            background: #ffc928;
            color: #10245c;
            padding: 15px 27px;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
            transition: .2s;
        }

        .btn-primary:hover {
            background: white;
            transform: translateY(-3px);
        }

        .hero-visual {
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.3);
            padding: 25px;
            border-radius: 22px;
            transform: rotate(2deg);
        }

        .laptop {
            background: #101a3d;
            border: 7px solid #b9d7ff;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 18px 35px rgba(0,0,0,.3);
        }

        .laptop-title {
            color: #8eb8ff;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .laptop pre {
            white-space: pre-wrap;
            color: #7ef5d0;
            font-size: 17px;
            line-height: 1.8;
        }

        .tech-label {
            text-align: center;
            margin-top: 18px;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
        }

        /* CONTOH PHP */
        .php-section {
            max-width: 1100px;
            margin: 65px auto;
            padding: 0 22px;
        }

        .section-heading {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-description {
            color: #64748b;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .code-card {
            background: #151b31;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,.13);
        }

        .code-header {
            padding: 17px 22px;
            background: #202c50;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .copy-button {
            border: none;
            background: #40527d;
            color: white;
            padding: 10px 17px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .copy-button:hover {
            background: #0755ed;
        }

        .code-content {
            padding: 28px;
            color: #8df2d0;
            font-size: 16px;
            line-height: 1.9;
            overflow-x: auto;
        }

        .php-tag {
            color: #ff79aa;
        }

        .php-string {
            color: #ffe66d;
        }

        .code-note {
            background: #dcfce7;
            color: #166534;
            margin-top: 15px;
            padding: 16px;
            border-radius: 10px;
        }

        /* BANNER PENDAFTARAN */
        .join-banner {
            padding: 42px 8%;
            background: linear-gradient(110deg, #3437d9, #0755ed, #328bff);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .join-banner h2 {
            font-size: 29px;
            margin-bottom: 9px;
        }

        .join-banner p {
            color: #e5edff;
            line-height: 1.6;
        }

        .join-banner .btn-primary {
            white-space: nowrap;
        }

        footer {
            text-align: center;
            padding: 22px;
            background: white;
            color: #64748b;
        }

        /* RESPONSIVE */
        @media (max-width: 750px) {
            .navbar {
                flex-direction: column;
            }

            .nav-menu {
                justify-content: center;
                flex-wrap: wrap;
                gap: 16px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 45px 7%;
            }

            .hero-visual {
                transform: none;
            }

            .join-banner {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 420px) {
            .nav-menu {
                gap: 12px;
                font-size: 13px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .code-header {
                flex-wrap: wrap;
            }

            .code-content {
                padding: 18px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">
            🎓 KursusKu
        </a>

        <div class="nav-menu">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('enrollments.create') }}">Pendaftaran</a>
            <a href="#contoh-php">Contoh PHP</a>
            <a href="#bergabung" class="nav-button">Daftar Sekarang</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div>
            <h1>
                Selamat Datang di
                <span>KursusKu!</span>
            </h1>

            <p>
                Daftarkan diri Anda sekarang dan tingkatkan
                keterampilan pemrograman, mulai dari dasar
                hingga mahir!
            </p>

            <a href="{{ route('enrollments.create') }}"
               class="btn-primary">
                🚀 Daftar Sekarang →
            </a>
        </div>

        <div class="hero-visual">
            <div class="laptop">
                <div class="laptop-title">
                    💻 PHP Programming
                </div>

                <pre><span class="php-tag">&lt;?php</span>

echo <span class="php-string">"Belajar PHP
di KursusKu!"</span>;

<span class="php-tag">?&gt;</span></pre>
            </div>

            <div class="tech-label">
                PHP • MySQL • HTML • CSS • Laravel
            </div>
        </div>
    </section>

    <!-- CONTOH KODE PHP -->
    <section class="php-section" id="contoh-php">

        <h2 class="section-heading">
            💻 Contoh Kode PHP Dasar
        </h2>

        <p class="section-description">
            Mulailah belajar pemrograman dari contoh sederhana.
            Pelajari bagaimana PHP menampilkan teks pada halaman web.
        </p>

        <div class="code-card">

            <div class="code-header">
                <strong> &lt;/&gt; PHP Dasar</strong>

                <button class="copy-button"
                        onclick="copyPHP()"
                        id="copyButton">
                    📋 Salin Kode
                </button>
            </div>

            <pre class="code-content" id="phpCode"><span class="php-tag">&lt;?php</span>
echo <span class="php-string">"Halo, Selamat Datang di KursusKu!"</span>;
<span class="php-tag">?&gt;</span></pre>

        </div>

        <div class="code-note">
            ✅ Kode ini merupakan contoh dasar untuk menampilkan
            teks menggunakan PHP.
        </div>

    </section>

    <!-- BANNER PENDAFTARAN -->

    
<!-- KURSUS POPULER -->
<section class="popular-courses" id="kursus">

    <div class="course-heading">
        <div>
            <h2>🏆 Kursus Populer</h2>
            <p>Pilih kursus dan mulai perjalanan belajarmu!</p>
        </div>
    </div>

    <div class="course-list">

        <!-- PHP DASAR -->
        <article class="course-card">
            <div class="course-image php-image">
                <span>PHP</span>
            </div>

            <div class="course-content">
                <h3>PHP Dasar</h3>
                <p>
                    Pelajari dasar-dasar PHP untuk membuat
                    website dinamis dari awal.
                </p>

                <a href="{{ route('enrollments.create') }}"
                   class="course-button">
                    Daftar Sekarang →
                </a>
            </div>
        </article>

        <!-- MYSQL DASAR -->
        <article class="course-card">
            <div class="course-image mysql-image">
                <span>MySQL</span>
            </div>

            <div class="course-content">
                <h3>MySQL Dasar</h3>
                <p>
                    Pelajari cara membuat, mengelola,
                    dan menghubungkan database.
                </p>

                <a href="{{ route('enrollments.create') }}"
                   class="course-button">
                    Daftar Sekarang →
                </a>
            </div>
        </article>

        <!-- LARAVEL DASAR -->
        <article class="course-card">
            <div class="course-image laravel-image">
                <span>Laravel</span>
            </div>

            <div class="course-content">
                <h3>Laravel Dasar</h3>
                <p>
                    Belajar membuat aplikasi web modern
                    menggunakan framework Laravel.
                </p>

                <a href="{{ route('enrollments.create') }}"
                   class="course-button">
                    Daftar Sekarang →
                </a>
            </div>
        </article>

    </div>
</section>

    <section class="join-banner" id="bergabung">

        <div>
            <h2>🚀 Bergabunglah Sekarang!</h2>

            <p>
                Jadilah bagian dari komunitas pembelajar
                dan mulai perjalanan pemrogramanmu bersama KursusKu.
            </p>
        </div>

        <a href="{{ route('enrollments.create') }}"
           class="btn-primary">
            Daftar Sekarang →
        </a>

    </section>

    <!-- FOOTER -->
    <footer>
        &copy; {{ date('Y') }} {{ $siteName }}.
        Belajar dan berkembang bersama.
    </footer>

    <!-- JAVASCRIPT TOMBOL SALIN -->
    <script>
        function copyPHP() {
            const code = '<?php\necho "Halo, Selamat Datang di KursusKu!";\n?>';

            navigator.clipboard.writeText(code)
                .then(function () {
                    const button = document.getElementById('copyButton');

                    button.innerText = '✓ Berhasil Disalin';

                    setTimeout(function () {
                        button.innerText = '📋 Salin Kode';
                    }, 2000);
                })
                .catch(function () {
                    alert('Kode tidak dapat disalin. Silakan salin secara manual.');
                });
        }
    </script>

</body>
</html>
