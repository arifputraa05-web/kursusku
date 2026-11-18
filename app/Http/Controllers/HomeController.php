<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['participant', 'course'])->latest()->get();[cite: 20]
        return view('enrollments.index', compact('enrollments'));[cite: 20]
    }

    public function create()
    {
        $participants = Participant::orderBy('name')->get();[cite: 17]
        $courses = Course::where('status', 'aktif')->orderBy('name')->get();[cite: 17]
        return view('enrollments.create', compact('participants', 'courses'));[cite: 17]
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'participant_id' => ['required', 'exists:participants,id'],
            'course_id' => [
                'required',
                'exists:courses,id',
                Rule::unique('enrollments')->where(fn ($q) => $q->where('participant_id', $request->participant_id)),
            ],
        ], [
            'course_id.unique' => 'Participant ini sudah terdaftar pada course tersebut.',[cite: 19]
        ]);

        $data['status'] = 'registered';[cite: 17]
        Enrollment::create($data);[cite: 17]

        return redirect()->route('enrollments.index')->with('success', 'Enrollment berhasil disimpan.');[cite: 17]
    }
}