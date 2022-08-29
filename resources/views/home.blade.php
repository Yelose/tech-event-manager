@extends('layouts.main')

@section('content')

    <header>
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
    </header>
    <main>
        <div class="d-flex flex-row mb-5 show-cards">
            @foreach ($events as $event)
            <div class="card">
                <img src="{{$event->image}}" class="card-img-top" alt="{{$event->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">{{$event->description}}</p>
                    <p>Salida: {{$event->date}} / {{$event->hour}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                      </svg></p>
                    <p>{{$event->min_participants}} / {{$event->max_participants}} Grupo Min/Max <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>                      
                      </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>                      
                      </svg></p>
                    <section class="card-buttons">
                        <a href="/show/{{$event->id}}">más info</a>
                        <a href="/show/{{$event->id}}">inscribirse</a>
                    </section>
                </div>
            </div>
            @endforeach
        </div>

        @endempty
        {{-- <p>{{$events}}</p> --}}

    </main>
 @endsection

