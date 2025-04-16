<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* الشريط الجانبي */
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar a, .sidebar form button {
            display: block;
            width: 100%;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 10px 0;
            background: #444;
            text-align: center;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .sidebar a:hover, .sidebar form button:hover {
            background: #555;
        }

        /* المحتوى الرئيسي */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        /* الشريط العلوي */
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

        /* تنسيق جدول المواعيد */
        .appointments-container {
            max-width: 800px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f4f4f4;
        }

        button {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .approve-btn {
            background: #28a745;
            color: white;
        }

        .approve-btn:hover {
            background: #218838;
        }

        .reject-btn {
            background: #dc3545;
            color: white;
        }

        .reject-btn:hover {
            background: #c82333;
        }

    </style>
</head>
<body>


    <div class="sidebar">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>


    <div class="main-content">
        

        <div class="top-bar">
            <h2>Dashboard</h2>
            <input type="text" class="search-box" placeholder="Search...">
        </div>


        <div class="appointments-container">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->first_name }}</td>
                            <td>{{ $appointment->last_name }}</td>
<td>{{ $appointment->appointment_date }}</td>
                            <td>{{ $appointment->appointment_time }}</td>
                            <td>
                                <form action="{{ route('appointments.approve', $appointment->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="approve-btn">Approve</button>
                                </form>
                                <form action="{{ route('appointments.reject', $appointment->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="reject-btn">Reject</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>