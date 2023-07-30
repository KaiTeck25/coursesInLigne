<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Course Application</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
            background-color: #f7fafc;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 120px;
            height: 120px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }
        .header p {
            font-size: 18px;
            color: #666;
        }
        .course-list {
            margin-top: 30px;
        }
        .course {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .course h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .course p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }
        .course a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ef3b2d;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }
        .course a:hover {
            background-color: #d6281d;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
        }
        .footer a {
            color: #666;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block bg-gradient-to-r from-blue-600 to-red-600">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-100 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-100 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-100 underline">Register</a>
            @endif
        @endif
    </div>

        <div class="logo">
            <img src="m.png" alt="Logo">
        </div>
        <div class="header">
            <h1>Welcome to the Online Course Application</h1>
            <p>Start your learning journey with our wide range of courses.</p>
        </div>
        <div class="course-list">
            @foreach($courses as $course)
                <div class="course">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->description }}</p>
                    <a href="{{ $course->enrollLink }}">Enroll Now</a>
                </div>
            @endforeach

        </div>
        <div class="footer">
            &copy; 2023 Online Course Application. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
        </div>
    </div>
</body>
</html>
