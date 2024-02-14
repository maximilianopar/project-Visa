@extends('layouts.app')

@section('content')
    <div class="w-75 mx-auto">
        <h3 class="extra-bold">Editar libro y/o autor</h3>
        
    </div>

    <div  class="w-75 mx-auto">
        <form action="/project-g/public/books/{{$book->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3" >
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del libro." value="{{ $book->titulo }}">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingrese el autor del libro." value="{{ $book->autor }}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/project-g/public/books/" class="btn btn-danger">cancelar</a>
            </div>
        </form>
    </div>

@endsection