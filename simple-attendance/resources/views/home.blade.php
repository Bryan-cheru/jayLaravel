<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Attendance System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            padding: 20px;
        }

        .header {
            position: fixed;
            top: 0;
            right: 0;
            padding: 20px 40px;
            z-index: 1000;
        }

        .header .btn {
            margin-left: 10px;
        }

        .container {
            max-width: 800px;
            margin: 100px auto 0;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 25px;
            font-size: 1em;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-primary {
            background: #4CAF50;
            color: white;
        }

        .btn-primary:hover {
            background: #45a049;
        }

        .btn-secondary {
            background: white;
            color: #333;
            border: 1px solid #ddd;
        }

        .btn-secondary:hover {
            background: #f9f9f9;
        }

        .features {
            margin-top: 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            text-align: left;
        }

        .feature {
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .feature h3 {
            color: #4CAF50;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .feature p {
            font-size: 0.95em;
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    </div>

    <div class="container">
        <h1>Employee Attendance</h1>
        <p>Track your team's attendance easily and efficiently. Manage check-ins, check-outs, and view attendance records all in one place.</p>

        <div class="features">
            <div class="feature">
                <h3> Easy Check-In</h3>
                <p>Quick and simple attendance marking for employees</p>
            </div>
            <div class="feature">
                <h3> Reports</h3>
                <p>View detailed attendance reports and analytics</p>
            </div>
            <div class="feature">
                <h3> Team Management</h3>
                <p>Manage multiple employees effortlessly</p>
            </div>
            <div class="feature">
                <h3> Secure</h3>
                <p>Your data is safe and protected</p>
            </div>
        </div>
    </div>
</body>
</html>
