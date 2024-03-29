<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Models\Student;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students =Student::all();
        return view('students.index',compact('students')); //blade
    }
    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
       return view('students.create') ;
    }
    public function store(Request $request)  //validation login here
    {
        $request->validate([
            'name'=>'required|string|max:255',
        ]);
        Student::create($request->all());
        return redirect()->route('Students.index');
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
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student) //validation login here
    {
        $request->validate([
            'name'=>'required|string|max:255',
        ]);
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
