@extends('layouts.app')

@section('title', 'Pendaftaran Kursus - KursusKu')

@section('content')
<main class="kursusku-home">
    <div class="form-wrap" style="max-width: 850px; margin: 40px auto; padding: 0 20px;">

        {{-- KOTAK UTAMA DENGAN TEMA BERANDA --}}
        <div class="form-card" style="background: #ffffff; border-radius: 24px; box-shadow: 0 15px 35px rgba(7, 94, 96, 0.08); overflow: hidden; border: 1px solid #e2ecec;">
            
            {{-- HEADER BANNER SENADA DENGAN BERANDA --}}
            <div style="background: linear-gradient(120deg, #075e60, #118b83); padding: 40px 45px; color: #ffffff;">
                <span style="display: inline-block; color: #ffbd38; font-size: 13px; font-weight: 800; letter-spacing: 2px; margin-bottom: 8px;">
                    ✦ FORMULIR RESMI KURSUSKU
                </span>
                <h1 style="font-size: 32px; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                    Pendaftaran Kursus Baru
                </h1>
                <p style="color: #e5ffff; font-size: 15px; line-height: 1.6; max-width: 600px;">
                    Lengkapi data di bawah ini untuk mendaftarkan program kursus baru ke dalam sistem platform KursusKu.
                </p>
            </div>

            {{-- ISI FORMULIR --}}
            <div style="padding: 45px;">

                @if (session('error'))
                    <div class="alert-err">{{ session('error') }}</div>
                @endif
                @if (session('success'))
                    <div class="alert-ok">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert-err">
                        @foreach ($errors->all() as $e)<div>{{ $e }}</div>@endforeach
                    </div>
                @endif

                <form method="POST" action="{{ url('/pendaftaran') }}">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label for="kode">Kode Kursus</label>
                            <input id="kode" name="kode_kursus" value="{{ old('kode_kursus') }}" placeholder="Contoh: WEB-102">
                        </div>
                        <div>
                            <label for="nama">Nama Kursus</label>
                            <input id="nama" name="nama_kursus" value="{{ old('nama_kursus') }}" placeholder="Masukkan nama kursus">
                        </div>
                        <div class="full">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Tuliskan deskripsi singkat kursus...">{{ old('deskripsi') }}</textarea>
                        </div>
                        <div>
                            <label for="biaya">Biaya Kursus (Rp)</label>
                            <input id="biaya" type="number" name="biaya" value="{{ old('biaya') }}" placeholder="Contoh: 150000">
                        </div>
                        <div>
                            <label for="kuota">Kuota Peserta</label>
                            <input id="kuota" type="number" name="kuota" value="{{ old('kuota') }}" placeholder="Contoh: 25">
                        </div>
                        <div>
                            <label for="tanggal">Tanggal Mulai</label>
                            <input id="tanggal" type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}">
                        </div>
                        <div>
                            <label for="status">Status Kursus</label>
                            <select id="status" name="status">
                                <option value="">-- Pilih Status --</option>
                                <option value="aktif" @selected(old('status') == 'aktif')>Aktif</option>
                                <option value="nonaktif" @selected(old('status') == 'nonaktif')>Nonaktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions" style="margin-top: 35px; display: flex; gap: 15px; align-items: center;">
                        <button type="submit" class="btn-primary" style="border: none; cursor: pointer; font-family: 'Poppins', sans-serif; font-size: 15px;">
                            Simpan Kursus →
                        </button>
                        <a href="{{ url('/') }}" class="btn-secondary" style="background: transparent; border: 2px solid #075e60; color: #075e60; padding: 15px 28px; border-radius: 50px; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; transition: 0.3s;">
                            Kembali
                        </a>
                    </div>
                </form>

            </div>

        </div>

    </div>
</main>
@endsection