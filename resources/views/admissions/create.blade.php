<h1>Admit Student</h1>
<form method="POST" action="{{ route('admissions.store') }}">
    @csrf
    <label for="student_id">Student:</label>
    <select name="student_id" id="student_id">
        @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>
    <label for="course_id">Course:</label>
    <select name="course_id" id="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
        @endforeach
    </select>
    <label for="status">Status:</label>
    <input type="text" name="status" id="status">
    <button type="submit">Admit Student</button>
</form>
