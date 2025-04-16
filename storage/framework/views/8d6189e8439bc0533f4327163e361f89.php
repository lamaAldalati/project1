

<?php $__env->startSection('content'); ?>
    <h1>Approved Appointments</h1>

    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($appointment->first_name); ?> <?php echo e($appointment->last_name); ?> - <?php echo e($appointment->appointment_date); ?> <?php echo e($appointment->appointment_time); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form action="<?php echo e(route('logout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LAMA\Desktop\pproj\app\resources\views/doctors/index.blade.php ENDPATH**/ ?>