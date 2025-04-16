<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment</title>
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

        .form-container {
            max-width: 500px;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

    </style>
</head>
<body>

    <div class="sidebar">
        <a href="<?php echo e(route('login')); ?>">Login</a>
        <a href="<?php echo e(route('patients.create')); ?>">Add New Appointment</a>
    </div>


    <div class="main-content">
        
        <div class="top-bar">
            <h2>Create New Appointment</h2>
            <input type="text" class="search-box" placeholder="Search...">
        </div>

        <div class="form-container">
            <h1>Create New Appointment</h1>
            <form action="<?php echo e(route('patients.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="appointment_date">Appointment Date:</label>
                <input type="date" id="appointment_date" name="appointment_date" required>

                <label for="appointment_time">Appointment Time:</label>
                <input type="time" id="appointment_time" name="appointment_time" required>

                <button type="submit">Submit</button>
            </form>
        </div>

    </div>

</body>
</html><?php /**PATH C:\Users\LAMA\Desktop\aya_project\app\resources\views/patients/create.blade.php ENDPATH**/ ?>