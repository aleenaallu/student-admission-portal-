<h1>Courses</h1>
<a href="{{ route('courses.create') }}">Add Course</a>
<ul>
    @foreach($courses as $course)
        <li>{{ $course->name }}</li>
    @endforeach
</ul>
