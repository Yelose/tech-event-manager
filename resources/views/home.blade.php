<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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

    <h1>Viajes Verano, España 2022</h1>
    @empty($events)
        <h3>No hay Eventos Disponibles</h3>
    @else

    <div class="d-flex flex-row mb-5">
        <div class="d-flex flex-column"></div>  
     @foreach ($events as $event)
        <div class="card" style="width: 18rem;">
            <img src="{{$event->image}}" class="card-img-top" alt="{{$event->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$event->title}}</h5>
              <p class="card-text">{{$event->description}}</p>
              <p>Salida: {{$event->date}} / {{$event->hour}}</p>
              <p>{{$event->min_participants}} / {{$event->max_participants}} Grupo Min/Max</p>
              <a href="/detail/{{$event->id}}" class="btn btn-primary">más info</a>
            </div>
          </div>
          @endforeach
        </div>
    
    @endempty
    {{-- <p>{{$events}}</p> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
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
