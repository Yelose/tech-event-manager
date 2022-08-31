@extends('layouts.main')

@section('content')
    

    <h1>Nueva Excursión</h1>
    {{-- <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
        <input type="file" name="imagen1" />
        <input type="submit" name="subir-imagen" value="Enviar imagen" />
    </form> --}}
    <form action="{{ route('store')}}" method="POST" enctype="multipart/formdata">
        @csrf
            <label for="image">Subir Imagen</label>
            <input type="file" name="image" required/>
            
        <div class="form-row">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-row">
            <label for="date">Fecha</label>
            <input type="date" name="date" class="form-control" required>       
        </div>
        <div class="form-row">
            <label for="hour">Hora</label>
            <input type="time" name="hour" class="form-control" required>   
        </div>
        <div class="form-row">
            <label for="duration">Duración</label>
            <input type="text" name="duration" class="form-control" required>
        </div>
        <div class="form-row">
            <label for="max_participants">Máximo de Participantes</label>
            <input type="number" name="max_participants" class="form-control" required>
        </div>
        <div class="form-row">
            <label>Mínimo de Participantes</label>
            <input type="number" name="min_participants" min="2" class="form-control" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input type="number" name="Price" min="1.00" step="0.01" class="form-control" required>
        </div>
        <div class="form-row">
            <label>Descripción</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-row">
            <label>Incluye</label>
            <input type="text" name="included" class="form-control" required>
        </div>
        <input type="submit" name="subir-imagen" value="Subir Evento" class="btn btn-primary btn-lg" />
    </form>

@endsection
