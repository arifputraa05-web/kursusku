@extends('layouts.app')

@section('title', 'Tambah Enrollment - KursusKu')

@section('content')
<main class="kursusku-home">
    <div class="form-wrap" style="max-width: 850px; margin: 40px auto; padding: 0 20px;">
        <div class="form-card" style="background: #ffffff; border-radius: 24px; box-shadow: 0 15px 35px rgba(7, 94, 96, 0.08); overflow: hidden; border: 1px solid #e2ecec;">
            
            <div style="background: linear-gradient(120deg, #075e60, #118b83); padding: 40px 45px; color: #ffffff;">
                <span style="color: #ffbd38; font-size: 13px; font-weight: 800; letter-spacing: 2px;">✦ FORMULIR ENROLLMENT</span>
                <h1 style="font-size: 32px; font-weight: 800; margin: 8px 0; color: #ffffff;">Tambah Pendaftaran Kursus</h1>
                <p style="color: #e5ffff; font-size: 15px;">Hubungkan peserta dengan kursus pilihan secara relasional.</p>
            </div>

            <div style="padding: 45px;">
                @if ($errors->any())
                    <div class="alert-err" style="background-color: #fee2e2; color: #991b1b; padding: 14px 18px; border-radius: 12px; margin-bottom: 22px;">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('enrollments.store') }}">
                    @csrf
                    <div class="form-grid" style="display: grid; grid-template-columns: 1fr; gap: 22px;">
                        <div>
                            <label for="participant_id" style="display: block; font-weight: 600; font-size: 14px; color: #183b3b; margin-bottom: 8px;">Pilih Participant</label>
                            <select name="participant_id" id="participant_id" required style="width: 100%; padding: 13px 16px; border: 1.5px solid #dce5e5; border-radius: 12px; font-family: 'Poppins', sans-serif;">
                                <option value="">-- Pilih Participant --</option>
                                @foreach ($participants as $participant)
                                    <option value="{{ $participant->id }}" @selected(old('participant_id') == $participant->id)>
                                        {{ $participant->name }} ({{ $participant->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="course_id" style="display: block; font-weight: 600; font-size: 14px; color: #183b3b; margin-bottom: 8px;">Pilih Course</label>
                            <select name="course_id" id="course_id" required style="width: 100%; padding: 13px 16px; border: 1.5px solid #dce5e5; border-radius: 12px; font-family: 'Poppins', sans-serif;">
                                <option value="">-- Pilih Course --</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>
                                        {{ $course->code }} - {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div style="margin-top: 35px; display: flex; gap: 15px; align-items: center;">
                        <button type="submit" style="background: linear-gradient(120deg, #075e60, #118b83); color: #ffffff; padding: 14px 28px; border-radius: 50px; font-weight: 700; border: none; cursor: pointer;">
                            Simpan Enrollment →
                        </button>
                        <a href="{{ route('enrollments.index') }}" style="border: 2px solid #075e60; color: #075e60; padding: 12px 26px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-block;">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</main>
@endsection