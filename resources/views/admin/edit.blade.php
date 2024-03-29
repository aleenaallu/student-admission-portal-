<!-- resources/views/admin/create.blade.php -->
<h1>Create Student</h1>
<form action="{{ route('admin.students.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <button type="submit">Save</button>
</form>
