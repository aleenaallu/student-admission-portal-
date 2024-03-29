<h1>Admissions</h1>
<a href="{{ route('admissions.create') }}">Admit Student</a>
<ul>
    @foreach($admissions as $admission)
        <li>{{ $admission->student->name }} - {{ $admission->course->name }}</li>
    @endforeach
</ul>
