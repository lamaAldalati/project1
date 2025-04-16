

<?php $__env->startSection('content'); ?>
    <h1>Pending Appointments</h1>

    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($appointment->first_name); ?> <?php echo e($appointment->last_name); ?> - <?php echo e($appointment->appointment_date); ?> <?php echo e($appointment->appointment_time); ?></p>
        <form action="<?php echo e(route('appointments.approve', $appointment->id)); ?>" method="POST" style="display: inline-block;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <button type="submit">Approve</button>
        </form>
        <form action="<?php echo e(route('appointments.reject', $appointment->id)); ?>" method="POST" style="display: inline-block;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Reject</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form action="<?php echo e(route('logout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LAMA\Desktop\pproj\app\resources\views/employees/index.blade.php ENDPATH**/ ?>