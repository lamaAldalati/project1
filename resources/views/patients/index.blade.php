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
        <a href="{{ route('login') }}">Login</a><br>
        <a href="{{ route('patients.create') }}">Add New Appointment</a>
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
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->first_name }}</td>
                        <td>{{ $appointment->last_name }}</td>
                        <td>{{ $appointment->address }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ $appointment->appointment_time }}</td>
                        <td>
                            <a href="{{ route('patients.edit', $appointment->id) }}">Edit</a>
                            <form action="{{ route('patients.destroy', $appointment->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>