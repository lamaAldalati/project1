<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }
        
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 10px 0;
            background: #444;
            text-align: center;
            border-radius: 5px;
        }
        
        .sidebar a:hover {
            background: #555;
        }
        
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        
        .top-bar {
            background: #ddd;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .search-box {
            padding: 8px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        form button {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        form button:hover {
            background: darkred;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="<?php echo e(route('login')); ?>">Login</a><br>
        <a href="<?php echo e(route('patients.create')); ?>">Add New Appointment</a>
    </div>

    <div class="main-content">
        
        <div class="top-bar">
            <h2>Dashboard</h2>
            <input type="text" class="search-box" placeholder="Search...">
        </div>

        <table>
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

    </div>

</body>
</html><?php /**PATH C:\Users\LAMA\Desktop\aya_project\app\resources\views/patients/index.blade.php ENDPATH**/ ?>