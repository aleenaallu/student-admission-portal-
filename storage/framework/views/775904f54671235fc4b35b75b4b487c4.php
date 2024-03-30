<h1>Admissions</h1>
<a href="<?php echo e(route('admissions.create')); ?>">Admit Student</a>
<ul>
    <?php $__currentLoopData = $admissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($admission->student->name); ?> - <?php echo e($admission->course->name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH E:\wiilowy_python+php\laravel_first\first_laravel\student-admission-portal\resources\views/admissions/index.blade.php ENDPATH**/ ?>