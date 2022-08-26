<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursiones Fem-Desk</title>
</head>

<body>
    @if (Route::has('login'))
    <div class="hidden navbar fixed top-0 right-0 px-6 py-4 sm:block">
        <img src="{{ asset('../img/logoexcursiones.png') }}" alt="logo">
        <div class="navigation-menu">
            <a href="{{ url('/') }}">Inicio</a>
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
    </div>
    @endif
    <div class="slider"></div>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .slider {
        width: 100%;
        height: 40vh;
        background-image: url("https://live.staticflickr.com/7750/17906978882_7d028d8daa_b.jpg");
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .navbar {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        align-items: center;
        background-color: #712E3D;
        padding: 10px;
    }

    .navigation-menu>a {
        padding: 10px;
        text-decoration: none;
        color: white;
        font-size: clamp(14px, 2vw, 20px);
    }

    .navbar>img {
        width: 50px;
        height: 50px;
    }
</style>
