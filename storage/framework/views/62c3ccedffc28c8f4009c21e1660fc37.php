<h1>Courses</h1>
<a href="<?php echo e(route('courses.create')); ?>">Add Course</a>
<ul>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($course->name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH E:\wiilowy_python+php\laravel_first\first_laravel\student-admission-portal\resources\views/courses/index.blade.php ENDPATH**/ ?>