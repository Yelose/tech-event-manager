<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    "You're logged in!"
                    @if (Auth::user()->isAdmin === 1)
                    <p>Eres Admin</p>
                    <a href="/create"><button>Crear +</button></a>
                    <a href="/delete"><button>Borrar -</button></a>
                    @foreach ($events as $event)
                    <p class="leading-relaxed mb-3">{{$event->title}}</p>
                    <form action="{{ route('destroy', ['id' => $event->id]) }}" method="post">
                        @csrf
                        @method('DELETE');
                        <button type="submit" class="btn btn-link">Delete</button>
                    </form>
                    @endforeach
                    @else
                    No eres Admin
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
