<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
         * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #e7f0fd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-box {
            text-align: center;
        }

        .logo {
            width: 100px;
            margin-bottom: 30px;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 28px;
        }

        .textbox {
            margin-bottom: 20px;
        }

        .textbox input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        .textbox input::placeholder {
            color: #aaa;
        }

        .links {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #dc3545;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
            <h1>Masuk</h1>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="textbox">
                    <input type="email" placeholder="Masukan Email" name="email" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Masukan Password" name="password" required>
                </div>
                <div class="links">
                    <a href="{{ route('register') }}">Belum punya akun? Daftar</a>
                    <a href="{{ route('password.request') }}">Lupa password?</a>
                </div>
                <button type="submit" class="btn">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
