<h1>Students</h1>
<a href="<?php echo e(route('students.create')); ?>">Add Student</a>
<ul>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($student->name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH E:\wiilowy_python+php\laravel_first\first_laravel\student-admission-portal\resources\views/students/index.blade.php ENDPATH**/ ?>