@extends('layouts.main')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="grid grid-cols-1 mt-5 mx-7">
                <img id="selected-image" style="max-height: 300px;">           
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                <div class='flex items-center justify-center w-full'>
                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-4'>
                        
                        <svg class="h-20 w-20 text-red-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
                            <path stroke="none" d="M0 0h24v24H0z"/>  
                            <path d="M7 18a4.6 4.4 0 0 1 0 -9h0a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />  
                            <polyline points="9 15 12 12 15 15" /> 
                             <line x1="12" y1="12" x2="12" y2="21" />
                        </svg>
                        <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                        </div>
                    <input name="image" id="image" type='file' class="hidden" />
                    </label>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Titulo</label>
                <input name="title" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
            </div>
            <div class="grid grid-cols-1 grid-cols-2 md:grid-cols-3 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha:</label>
                    <input name="date" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" required/>
                </div>
                <div class="grid grid-cols-2">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Hora:</label>
                    {{--  <input name="hour" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="time" required/>  --}}
                    <input type="time" name="hour" value="08:00:00" max="23:00:00" min="00:00:00" list="listTime" step="1">  
                </div> 
                <div class="grid grid-cols-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Duración:</label>
                    <input name="duration" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" required/>
                </div>
            </div>
            <div class="grid grid-cols-1 grid-cols-2 md:grid-cols-3 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Máximo de Participantes:</label>
                    <input name="max_participants" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" min="10" required/>
                </div>
                <div class="grid grid-cols-2">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Mínimo de Participantes:</label>
                    <input name="min_participants" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" min="2" max="10" required/>
                </div>
                <div class="grid grid-cols-3">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Precio:</label>
                    <input name="price" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" min="1.00" step="0.05" required/>
                    <label>&#8364</label>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripción:</label>
                <textarea name="description" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3"></textarea>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-lg text-gray-500 text-light font-semibold">Incluido:</label>
                <textarea name="included" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3"></textarea>
            </div>
            <div class='flex justify-evenly  md:gap-4 gap-8 pt-5 pb-5'>
                <button type="submit" class='w-auto bg-red-900 hover:bg-red-900 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
                <a href="{{ route('home') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
            </div>
        </form> 

        </div>
    </div>
</div>

@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#image').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#selected-image').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>


