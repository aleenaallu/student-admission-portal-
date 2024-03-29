<h1>Students</h1>
<a href="{{ route('students.create') }}">Add Student</a>
<ul>
    @foreach($students as $student)
        <li>{{ $student->name }}</li>
    @endforeach
</ul>
