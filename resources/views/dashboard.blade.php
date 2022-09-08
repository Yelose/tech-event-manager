@extends('layouts.main')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if (Auth::user()->isAdmin === 1)
                <p>Eres Admin</p>
                <a href="/create"><button>Crear Nueva Excursión
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="green" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                        </svg>

                    </button></a>
                <div class="dashboard-events-container">
                    <div class="dashboard-event-title">
                        <h2 class="date">Fecha</h2>
                        <h2 class="event">Excursión</h2>
                        <h2 class="hour">Salida</h2>
                        <h2 class="participants">Participantes</h2>
                        <h2 class="price">Precio</h2>
                        <h2 class="actions">acciones</h2>
                    </div>
                    @foreach ($events as $event)
                    <div class="dashboard-event-container">
                        <div class="date">
                            <p>{{$event->date}}</p>
                        </div>
                        <div class="event">
                            <p>{{$event->title}}</p>
                        </div>
                        <div class="hour">
                            <p>{{$event->hour}}</p>
                        </div>
                        <div class="participants">
                            <p>{{$event->min_participants}}/{{$event->max_participants}}</p>
                        </div>
                        <div class="price">
                            <p>{{$event->price}}€/persona</p>
                        </div>
                        <div class="actions">
                            <form action="{{ route('destroy', ['id' => $event->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                            <a href="/edit/{{$event->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                No eres Admin
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
