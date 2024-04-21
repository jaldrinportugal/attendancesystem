<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .attendance {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        form {
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="time"], button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Attendance System Dashboard</h1>
      
        <div class="attendance">
            <h2>Mark Your Attendance</h2>
            <form id="attendanceForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="section">Section:</label>
                    <input type="text" id="section" name="section" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <button type="submit">Mark Attendance</button>
            </form>
        </div>

        <div class="attendances">
            <h2>Today's Attendances</h2>
            <table id="attendanceTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Section</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>BSIT-301</td>
                        <td>09:00 AM</td>
                    </tr>
                    <tr>
                        <td>Aldrin</td>
                        <td>BSIT-302</td>
                        <td>10:30 AM</td>
                    </tr>
                    <tr>
                        <td>Portugal</td>
                        <td>BSIT-303</td>
                        <td>12:15 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>