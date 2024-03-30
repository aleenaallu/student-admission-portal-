<h1>Add Course</h1>
<form method="POST" action="<?php echo e(route('courses.store')); ?>">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration">
    <!-- <label for="fee">Fee:</label> -->
    <!-- <input type="text" name="fee" id="fee"> -->
    <button type="submit">Submit</button>
</form>
<?php /**PATH E:\wiilowy_python+php\laravel_first\first_laravel\student-admission-portal\resources\views/courses/create.blade.php ENDPATH**/ ?>