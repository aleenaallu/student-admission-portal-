<h1>Add Course</h1>
<form method="POST" action="{{ route('courses.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration">
    <!-- <label for="fee">Fee:</label> -->
    <!-- <input type="text" name="fee" id="fee"> -->
    <button type="submit">Submit</button>
</form>
