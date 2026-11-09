@extends('layouts.app')

@section('title', 'Tambah Kursus')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Tambah Kursus</h2>
        <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Kembali</a>
    </div>

    <form action="{{ route('courses.store') }}" method="POST" class="card shadow-sm" novalidate>
        @csrf

        <div class="card-body">
            <div class="mb-3">
                <label for="code" class="form-label">Kode Kursus</label>
                <input type="text" id="code" name="code"
                       value="{{ old('code') }}"
                       placeholder="Contoh: WEB-102"
                       class="form-control @error('code') is-invalid @enderror">
                @error('code') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama Kursus</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name') }}"
                       placeholder="Masukkan nama kursus"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea id="description" name="description" rows="4"
                    placeholder="Masukkan deskripsi kursus"
                    class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fee" class="form-label">Biaya (Rp)</label>
                    <input type="number" id="fee" name="fee"
                           value="{{ old('fee') }}"
                           placeholder="Contoh: 300000"
                           class="form-control @error('fee') is-invalid @enderror">
                    @error('fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="quota" class="form-label">Kuota</label>
                    <input type="number" id="quota" name="quota"
                           value="{{ old('quota') }}"
                           placeholder="Contoh: 25"
                           class="form-control @error('quota') is-invalid @enderror">
                    @error('quota') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_date" class="form-label">Tanggal Mulai</label>
                    <input type="date" id="start_date" name="start_date"
                           value="{{ old('start_date') }}"
                           class="form-control @error('start_date') is-invalid @enderror">
                    @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status"
                            class="form-select @error('status') is-invalid @enderror">
                        <option value="">-- Pilih Status --</option>
                        @foreach (['draft' => 'Draft', 'open' => 'Open', 'closed' => 'Closed'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('status') === $value)>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-end gap-2">
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Kursus</button>
        </div>
    </form>
</div>
@endsection