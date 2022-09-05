@extends('layouts.main')

@section('content')

<header>
    @if (Route::has('login'))
    <div class="navbar">
        <img src="{{ asset('../img/logoexcursiones.png') }}" alt="logo">
        <div class="navigation-menu">
            <a href="{{ url('/') }}">Inicio</a>
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    </div>
    @endif
    <div class="slider"></div>

    <main>
        @empty($events)
        <h3>No hay Eventos Disponibles</h3>
        @else
        <h1>Viajes Verano, España 2022</h1>
        <div class="container flex px-1 py-2 show-cards">
            @foreach ($events as $event)
            <div class="card ">
                <div>
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg">
                        <img class="lg:h-72 md:h-48 w-full object-cover object-center" src="{{$event->image}}" alt="lugar">
                        <div class="p-6">
                            <h1 class="text-2xl font-semibold mb-3">{{$event->title}}</h1>
                            <h2 class="text-base font-medium text-indigo-300 mb-1">October 29, 2021</h2>
                            <p class="leading-relaxed mb-3">{{$event->description}}</p>
                            <p class="leading-relaxed mb-3">Salida: {{$event->date}} / {{$event->hour}}</p>
                            <p class="leading-relaxed mb-3">{{$event->min_participants}} /
                                {{$event->max_participants}} Grupo Min/Max
                            </p>
                            <div class="flex items-center">
                                <a class=" inline-flex items-center md:mb-2 px-6 py-4 bg-purple-600 rounded-full mr-14" href="/show/{{$event->id}}">Read More</a>
                                @auth
                                <a href="#">inscribirse</a>
                                @else
                                <a href="/login">inscribirse</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        @endempty

    </main>

    @endsection
