@extends('layouts.app')

@section('title', 'Beranda - KursusKu | Belajar Pemrograman')

@section('content')

<main class="kursusku-home">

    <!-- ================= HERO SECTION ================= -->
    <section class="hero-section">

        <div class="hero-content">

            <span class="hero-label">
                ✦ PLATFORM BELAJAR PEMROGRAMAN
            </span>

            <h1>
                Belajar Coding
                Jadi Lebih
                <span>Menyenangkan!</span>
            </h1>

            <p>
                Tingkatkan kemampuan pemrogramanmu bersama KursusKu.
                Mulai dari dasar hingga mahir dengan pembelajaran
                yang mudah, menarik, dan terarah.
            </p>

            <div class="hero-buttons">

                <a href="{{ url('/pendaftaran') }}"
                   class="btn-primary">
                    Mulai Belajar →
                </a>

                <a href="#kursus"
                   class="btn-secondary">
                    Jelajahi Kursus
                </a>

            </div>

            <div class="hero-info">

                <span>✓ Materi mudah dipahami</span>

                <span>✓ Belajar sesuai kemampuan</span>

                <span>✓ Praktik langsung</span>

            </div>

        </div>

        <div class="hero-image">

            {{-- Pastikan file ilustrasi-kursusku.jpg ada di dalam folder public/images/ --}}
            <img
                src="{{ asset('images/ilustrasi-kursusku.jpg') }}"
                alt="Ilustrasi pemrograman KursusKu"
                style="width: 100%; height: auto; border-radius: 16px; object-fit: cover; box-shadow: 0 15px 35px rgba(0,0,0,0.2);"
                onerror="this.onerror=null; this.src='https://placehold.co/600x420/0f5257/ffffff?text=KursusKu+Coding';"
            >

            <div class="floating-card">
                <span>💻</span>
                <div>
                    <strong>Belajar Coding</strong>
                    <small>Mulai dari nol</small>
                </div>
            </div>

        </div>

    </section>


    <!-- ================= STATISTIK ================= -->
    <section class="stats-section">

        <div class="stat-item">
            <h2>3+</h2>
            <p>Pilihan Kursus</p>
        </div>

        <div class="stat-item">
            <h2>100%</h2>
            <p>Materi Terarah</p>
        </div>

        <div class="stat-item">
            <h2>24/7</h2>
            <p>Akses Belajar</p>
        </div>

        <div class="stat-item">
            <h2>∞</h2>
            <p>Kesempatan Berkembang</p>
        </div>

    </section>


    <!-- ================= KEUNGGULAN ================= -->
    <section class="features-section" id="keunggulan">

        <div class="section-heading">

            <span>KENAPA KURSUSKU?</span>

            <h2>Belajar Lebih Mudah dan Terarah</h2>

            <p>
                Temukan pengalaman belajar pemrograman yang lebih
                menarik, praktis, dan mudah dipahami.
            </p>

        </div>

        <div class="features-grid">

            <div class="feature-card">

                <div class="feature-icon">📚</div>

                <h3>Materi Terstruktur</h3>

                <p>
                    Materi pembelajaran disusun secara bertahap
                    mulai dari dasar hingga tingkat lanjutan.
                </p>

            </div>

            <div class="feature-card">

                <div class="feature-icon">💻</div>

                <h3>Praktik Coding</h3>

                <p>
                    Pelajari pemrograman melalui contoh kode
                    yang mudah dipahami dan dipraktikkan.
                </p>

            </div>

            <div class="feature-card">

                <div class="feature-icon">🚀</div>

                <h3>Tingkatkan Skill</h3>

                <p>
                    Kembangkan kemampuan teknologi dan
                    pemrograman untuk masa depan.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= DAFTAR KURSUS ================= -->
    <section class="courses-section" id="kursus">

        <div class="section-heading">

            <span>PILIH PEMBELAJARANMU</span>

            <h2>Kursus Populer</h2>

            <p>
                Pilih materi pemrograman yang ingin kamu pelajari
                bersama KursusKu.
            </p>

        </div>

        <div class="courses-grid">

            <!-- KURSUS PHP -->
            <div class="course-card">

                <div class="course-banner php-banner">

                    <span>PHP</span>

                    <small>01</small>

                </div>

                <div class="course-body">

                    <span class="course-tag">PEMULA</span>

                    <h3>PHP Dasar</h3>

                    <p>
                        Pelajari dasar PHP, variabel, tipe data,
                        percabangan, perulangan, dan fungsi.
                    </p>

                    <a href="{{ url('/pendaftaran') }}">
                        Daftar Sekarang →
                    </a>

                </div>

            </div>


            <!-- KURSUS MYSQL -->
            <div class="course-card">

                <div class="course-banner mysql-banner">

                    <span>MySQL</span>

                    <small>02</small>

                </div>

                <div class="course-body">

                    <span class="course-tag">PEMULA</span>

                    <h3>MySQL Dasar</h3>

                    <p>
                        Pelajari pengelolaan database,
                        membuat tabel, dan mengolah data.
                    </p>

                    <a href="{{ url('/pendaftaran') }}">
                        Daftar Sekarang →
                    </a>

                </div>

            </div>


            <!-- KURSUS LARAVEL -->
            <div class="course-card">

                <div class="course-banner laravel-banner">

                    <span>Laravel</span>

                    <small>03</small>

                </div>

                <div class="course-body">

                    <span class="course-tag">MENENGAH</span>

                    <h3>Laravel Dasar</h3>

                    <p>
                        Bangun aplikasi web modern menggunakan
                        framework Laravel.
                    </p>

                    <a href="{{ url('/pendaftaran') }}">
                        Daftar Sekarang →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= CONTOH PHP ================= -->
    <section class="php-example-section" id="contoh">

        <div class="php-example-content">

            <div class="php-example-text">

                <span class="section-label">
                    BELAJAR SAMBIL PRAKTIK
                </span>

                <h2>
                    Mulai Mengenal
                    <span>Bahasa PHP</span>
                </h2>

                <p>
                    PHP merupakan salah satu bahasa pemrograman
                    yang digunakan untuk membangun website dinamis.
                    Yuk, mulai belajar melalui contoh sederhana!
                </p>

                <a href="{{ url('/pendaftaran') }}"
                   class="btn-primary">
                    Pelajari Sekarang →
                </a>

            </div>

            <div class="code-window">

                <div class="code-header">

                    <div class="code-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span>contoh.php</span>

                </div>

                <pre><code>&lt;?php

// Program PHP sederhana

$nama = "KursusKu";

echo "Selamat Datang!";
echo $nama;

?&gt;</code></pre>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->
    <section class="join-section">

        <div class="join-content">

            <span>✨ WAKTUNYA MULAI BELAJAR</span>

            <h2>
                Siap Mengembangkan Skill Codingmu?
            </h2>

            <p>
                Bergabunglah bersama KursusKu dan mulai
                perjalanan belajarmu menjadi programmer.
            </p>

        </div>

        <a href="{{ url('/pendaftaran') }}"
           class="join-button">
            Daftar Sekarang →
        </a>

    </section>

</main>

@endsection