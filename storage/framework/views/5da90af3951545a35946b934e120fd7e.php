<h1>Add Student</h1>
<form method="POST" action="<?php echo e(route('students.store')); ?>">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <button type="submit">Submit</button>
</form>
<?php /**PATH E:\wiilowy_python+php\laravel_first\first_laravel\student-admission-portal\resources\views/students/create.blade.php ENDPATH**/ ?>