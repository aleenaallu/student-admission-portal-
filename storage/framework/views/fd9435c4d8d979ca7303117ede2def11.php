<h1>Admit Student</h1>
<form method="POST" action="<?php echo e(route('admissions.store')); ?>">
    <?php echo csrf_field(); ?>
    <label for="student_id">Student:</label>
    <select name="student_id" id="student_id">
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="course_id">Course:</label>
    <select name="course_id" id="course_id">
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="status">Status:</label>
    <input type="text" name="status" id="status">
    <button type="submit">Admit Student</button>
</form>
<?php /**PATH E:\wiilowy_python+php\laravel_first\first_laravel\student-admission-portal\resources\views/admissions/create.blade.php ENDPATH**/ ?>