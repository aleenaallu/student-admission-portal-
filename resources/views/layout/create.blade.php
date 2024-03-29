<!-- resources/views/admin/create.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Create Student</h1>
    <form action="{{ route('admin.students.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Create</button>
    </form>
@endsection
