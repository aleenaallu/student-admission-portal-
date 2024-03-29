<h1>Add Student</h1>
<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <button type="submit">Submit</button>
</form>
