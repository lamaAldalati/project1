

<a href="<?php echo e(route('login')); ?>">
        <button>Login</button>
    </a>
    
<?php $__env->startSection('content'); ?>
    <h1>Appointments</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    
    <a href="<?php echo e(route('patients.create')); ?>" style="margin-bottom: 10px; display: inline-block;">Add New Appointment</a>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($appointment->id); ?></td>
                    <td><?php echo e($appointment->first_name); ?></td>
                    <td><?php echo e($appointment->last_name); ?></td>
                    <td><?php echo e($appointment->address); ?></td>
                    <td><?php echo e($appointment->phone); ?></td>
                    <td><?php echo e($appointment->appointment_date); ?></td>
                    <td><?php echo e($appointment->appointment_time); ?></td>
                    <td>
                        <a href="<?php echo e(route('patients.edit', $appointment->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('patients.destroy', $appointment->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LAMA\Desktop\pproj\app\resources\views/patients/index.blade.php ENDPATH**/ ?>