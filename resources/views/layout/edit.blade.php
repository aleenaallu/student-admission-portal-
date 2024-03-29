<!-- resources/views/admin/edit.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $student->email }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
