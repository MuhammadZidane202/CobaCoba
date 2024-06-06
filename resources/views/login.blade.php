<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') Website Absensi</title>
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #fff; /* Mengubah background menjadi putih */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-container h1 {
            margin-bottom: 30px;
            font-weight: bold;
            color: #4154f1;
            text-align: center;
        }
        .login-container .form-control {
            border-radius: 10px;
        }
        .login-container .btn-primary {
            background-color: #4154f1;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 10px;
        }
        .login-container .btn-link {
            color: #4154f1;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 15px;
        }
        .login-container .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<section id="login" class="d-flex justify-content-center align-items-center">
    <div class="login-container">
        <h1>LOGIN</h1>
        <form id="loginForm" action="{{ url('/menu') }}" method="GET" onsubmit="return validateLogin()">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/register" class="btn btn-link">Don't have an account? Register here</a>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
