<!-- resources/views/admin/index.blade.php -->
@extends('layouts.admin')

@section('content')
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
