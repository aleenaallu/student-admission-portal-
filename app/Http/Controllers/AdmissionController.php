<?php

namespace App\Http\Controllers;
use App\Models\Admission;
use App\Models\Student;
use App\Models\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\AdmissionController;


class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions=Admission::all();
        return view('admissions.index',compact('admissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('admissions.create', compact('students', 'courses'));
    }
    public function store(Request $request) //validation login here
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'status' => 'required|string|max:255',
        ]);
        Admission::create($request->all());
        return redirect()->route('admissions.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Admission $admission)
    {
        $students = Student::all();
        $courses = Course::all();
        return view('admissions.edit', compact('admission', 'students', 'courses'));
    }
    public function update(Request $request, Admission $admission) //validation login here
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'status' => 'required|string|max:255',
        ]);

        $admission->update($request->all());
        return redirect()->route('admissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    public function destroy(Admission $admission)
    {
        $admission->delete();
        return redirect()->route('admissions.index');
    }
}
