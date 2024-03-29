<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.index', ['student' => $students]);
        
    }
    public function create()
    {
        return view('admin.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function edit($id)
    {
        $students = User::findOrFail($id);
        return view('admin.edit', ['student' => $students]);
    }
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('admin.students.index');

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
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('admin.students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
