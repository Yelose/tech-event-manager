@extends('layouts.main')
@section('content')
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
                <form action="{{ route('destroy', ['id' => $event->id]) }}" method="post" class="formDelete">
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

@endsection

<script>
    (function(){
        'use strict'
        let forms = document.querySelectorAll('.formDelete')
        array.prototype.slice.call(forms)
        .forEach(function (form){
            form.addEventListener('submit', function(event){
                event.preventDefault()
                event.stopPropagation()
                Swal.fire({
                    title: '¿Estás Seguro qué desea eliminar el Evento?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#712E3D',
                    cancelButtonColor: 'yellow',
                    confirmButtonText: '¡Sí, Eliminar!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                      Swal.fire(
                        '¡Eliminado!',
                        'El Evento a sido Eliminado',
                        'con Éxito'
                      )
                    }
                  })
            }, false)
        })
    })()
</script>




