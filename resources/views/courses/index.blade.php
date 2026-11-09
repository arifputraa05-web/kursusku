@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')

<div class="container py-4">

    {{-- Header halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Daftar Kursus</h2>
            <p class="text-muted mb-0">
                Kelola data kursus yang tersedia.
            </p>
        </div>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    {{-- Pesan berhasil --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>
        </div>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Tabel daftar kursus --}}
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Data Kursus</h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Kursus</th>
                        <th>Biaya</th>
                        <th>Kuota</th>
                        <th>Status</th>
                        <th style="min-width: 230px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($courses as $course)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $course->code }}</td>

                            <td>{{ $course->name }}</td>

                            <td>
                                Rp {{ number_format($course->fee, 0, ',', '.') }}
                            </td>

                            <td>{{ $course->quota }}</td>

                            <td>
                                @if($course->status == 'open')
                                    <span class="badge bg-success">Open</span>
                                @elseif($course->status == 'closed')
                                    <span class="badge bg-danger">Closed</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </td>

                            {{-- Tombol aksi --}}
                            <td>

                                {{-- Detail --}}
                                <a href="{{ route('courses.show', $course) }}"
                                   class="btn btn-info btn-sm text-white mb-1">
                                    Detail
                                </a>

                                {{-- Edit --}}
                                <a href="{{ route('courses.edit', $course) }}"
                                   class="btn btn-warning btn-sm mb-1">
                                    Edit
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('courses.destroy', $course) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus kursus ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm mb-1">
                                        Hapus
                                    </button>

                                </form>

                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Belum ada data kursus.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection
