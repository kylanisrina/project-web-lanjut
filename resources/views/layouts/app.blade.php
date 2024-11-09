<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Home</title>
    <style>
* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            transition: all .2s ease-out;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #fff;
        }

        .navbarr {
            background: linear-gradient(135deg, #fddbc3, #e5b28e);
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}


        .logo {
            width: 60px;
            margin-left: 60px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 70px;
        }

        nav a {
            text-decoration: none;
            color: #a67a5b;
        }

        .navbar {
            position: absolute;
            top: 30px;
            left: 1200px;
        }

        li {
            margin-top: 10px;
            font-size: 20px;
            color: #a67a5b;
        }

        h1 {
            position: absolute;
            left: 230px;
            top: 30px;
            color: #a67a5b;
            font-size: 25px;
        }

        .dropdown {
            position: relative;
            margin-top: 10px;
            display: inline-block;
        }

        .dropbtn {
            color: #a67a5b;
            padding: 16px;
            font-size: 20px;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            z-index: 1;
        }

        .dropdown-content a {
            color: #a67a5b;
            font-size: 20px;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        img .logo {
            margin-top: 40px;
        }

        .content {
            margin-top: 100px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content img {
            margin-top: -15px;
        }

        .info-tambahan {
            padding: 20px;
        }

        .info-tambahan h2 {
            margin-top: 0;
        }

        .footer {
            background: linear-gradient(135deg, #fddbc3, #e5b28e);
            padding: 20px;
            text-align: center;
            box-shadow: 0px -2px 0px rgba(0, 0, 0, .075);
            margin-top: auto;
            width: 100%;
        }

        .footer p {
            margin: 0;
            color: #333;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            justify-content: center;
            max-width: 1200px;
            margin: 20px;
            margin-top: 80px;
            margin-left: 10px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #dddddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 15px;
        }

        .card-content h2 {
            font-size: 18px;
            margin: 0 0 10px;
            color: #333;
        }

        .card-content h3 {
            font-size: 14px;
            margin: 0;
            color: #777;
        }

        .medsos-section {
            width: 100%;
            padding-top: 35px;
            padding-bottom: 50px;
            box-sizing: border-box;
            background-color: white;
        }

        .medsos-text h2 {
            text-align: center;
            font-weight: 800;
            font-size: 40px;
            text-decoration: underline;
            color: #a67a5b;
        }

        .medsos-section ul {
            position: relative;
            text-align: center;
            padding: 0;
            left: 0%;
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .medsos-section ul li {
            list-style: none;
            margin: 0 15px;
        }

        .medsos-section ul li .fa-brands {
            font-size: 30px;
            line-height: 60px;
            transition: .6s;
            color: #a67a5b;
        }

        .medsos-section ul li a {
            width: 60px;
            margin-right: 20px;
            left: 20%;
            height: 60px;
            margin-top: 80px;
            margin-bottom: 50px;
            border-radius: 50%;
            background-color: #cfd5db;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 4px rgba(0, 0, 0, 0.5);
            text-decoration: none;
        }

        .medsos-section ul li a:hover {
            transform: translateY(-10px);
        }

        span {
            color: black;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            position: relative;
            margin: 0;
            padding: 10;
            margin-top: 150px;
            background: linear-gradient(135deg, #fddbc3, #e5b28e);
        }

        .card2 {
            width: 350px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
            overflow: hidden;
            background: linear-gradient(135deg, #8ffffb, #e5b28e);
        }

        .card-image2 img {
            padding: 8px;
            width: 85%;
            height: auto;
            border-radius: 15px;
            margin-left: 28px;
            margin-top: 20px;
        }

        .content2 {
            padding: 20px;
            text-align: left;
        }

        .content2 h3 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .card2:hover {
            transform: scale(1.05);
        }

        .card-image2 {
            width: 100%;
        }
        .content2 p {
            font-size: 15px;
        }

        .content2 .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #084e88;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
            color: white;
            margin-top: 12px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 4px;
            transition: 0.3s ease;
        }


        .text {
            width: 100%;
            text-align: center;
            margin-bottom: 40px;
        }

    </style>
</head>
<body>
@yield('content')
</body>
</html>
