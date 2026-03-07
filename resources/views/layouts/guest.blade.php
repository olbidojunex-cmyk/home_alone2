<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <!-- Scripts -->
    <style>
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(-200px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: tomato;
            padding: 20px;
        }

        .main-form {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            width: 100%;
            max-width: 400px;
            border: 1px solid #ddd;
            animation: slideInRight 0.5s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }

        /* Logo */
        img {
            width: 90px;
            margin-bottom: 30px;
        }

        img:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }

        /* Labels */
        .main-form label {
            display: block;
            text-align: left;
            font-size: 0.8rem;
            margin-top: 1rem;
        }

        /* Inputs */
        .main-form input[type="text"],
        .main-form input[type="username"],
        .main-form input[type="email"],
        .main-form input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.25s;
        }

        .main-form input:focus {
            outline: none;
            border-color: tomato;
            box-shadow: 0 0 5px rgba(255, 99, 71, 0.4);
        }

        /* Button */
        .main-form button {
            margin-top: 20px;
            width: 100%;
            padding: 0.6rem;
            border: none;
            background: tomato;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.25s;
        }

        .main-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Mobile optimization */
        @media (max-width:480px) {

            .main-form {
                padding: 1.5rem;
            }

            img {
                width: 70px;
            }

        }
    </style>
</head>

<body>
    <div class="main-form">
        <!-- Logo -->
        <div >
            <a href="/register">
            <img src="storage/akatsuki.png" alt="logo">
            </a>
        </div>

        <!-- Form slot -->
        <div>
            {{ $slot }}
        </div>
    </div>
    </div>

</body>

</html>