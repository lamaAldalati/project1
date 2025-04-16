

<?php $__env->startSection('content'); ?>
    <h1>Login</h1>

    <!-- عرض رسالة الخطأ إذا كانت موجودة -->
    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('login.check')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <a href="<?php echo e(url('/patients')); ?>">
        <button>Back</button>
    </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LAMA\Desktop\pproj\app\resources\views/login.blade.php ENDPATH**/ ?>