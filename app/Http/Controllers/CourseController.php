<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses =Course::all();
        return view('courses.index',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request) //validation login here
    {
        $request->validation([
            'name'=>'required|string|max:255',
            'duration'=>'required|string|max:255',
        ]);
        $course = new Course();
        $course->name = $validatedData['name'];
        $course->duration = $validatedData['duration'];
        // $course->fee = $validatedData['fee'];
        $course->save();
    
        // Redirect the user to a success page or return a response
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    
        // Course::create($request->all());
        // return redirect()->route('course.index');
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
    public function edit(Course $course)
    {
        return view('course.edit',compact('course'));
    }
    public function update(Request $request, Course $course) //validation login here
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'duration'=>'required|string|max:255',
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
