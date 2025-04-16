

<?php $__env->startSection('content'); ?>
    <h1>Edit Appointment</h1>

    <form action="<?php echo e(route('patients.update', $appointment->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?php echo e($appointment->first_name); ?>" required>
    <br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?php echo e($appointment->last_name); ?>" required>
    <br><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo e($appointment->address); ?>" required>
    <br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo e($appointment->phone); ?>" required>
    <br><br>

    <label for="appointment_date">Appointment Date:</label>
    <input type="date" id="appointment_date" name="appointment_date" value="<?php echo e($appointment->appointment_date); ?>" required>
    <br><br>

    <label for="appointment_time">Appointment Time:</label>
    <input type="time" id="appointment_time" name="appointment_time" value="<?php echo e($appointment->appointment_time); ?>" required>
    <br><br>

    <button type="submit">Update</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LAMA\Desktop\pproj\app\resources\views/patients/edit.blade.php ENDPATH**/ ?>