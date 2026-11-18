<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman formulir pendaftaran
Route::get('/pendaftaran', function () {
    $participants = DB::table('participants')->orderBy('id')->get();
    $courses = DB::table('courses')->orderBy('id')->get();
    
    return view('enrollments.create', compact('participants', 'courses'));
})->name('enrollments.create');

// Menyimpan data formulir pendaftaran
Route::post('/pendaftaran', [EnrollmentController::class, 'store'])->name('enrollments.store');

// Halaman laporan pendaftaran
Route::get('/laporan-pendaftaran', [EnrollmentController::class, 'index'])->name('enrollments.index');

// Route CRUD Kursus
Route::resource('courses', CourseController::class);

// Route Resource Enrollment tambahan
Route::resource('enrollments', EnrollmentController::class)->only(['index', 'create', 'store']);