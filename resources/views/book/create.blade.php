@extends('layouts.app')

@section('content')
    <div class="w-75 mx-auto">
        <h3 class="extra-bold">Agregar libro y autor</h3>
        
    </div>
    <div  class="w-75 mx-auto">
        <form action="/project-g/public/books" method="POST">
            @csrf
            
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del libro.">
            </div>

            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingrese el autor del libro.">
            </div>

            @error('autor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="/project-g/public/books/" class="btn btn-danger">Cancelar</a>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
    </div>
@endif
        </form>
    </div>
@endsection