@extends('layouts.app')

@section('content')
    <div class="w-75 mx-auto">
        <h3 class="extra-bold">Libros</h3>
        <a href=books/create class="btn btn-primary">Crear</a>
    </div>

    <table class="w-75 mx-auto mt-3 table table-sm table-smooth">

        <thead >
            <tr class="border-primary">
                <th  style="width: 5%" scope="col">#</th>
                <th  style="width: 25%" scope="col">Título </th>
                <th style="width: 45%" scope="col">Autor</th>
                <th  scope="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->titulo}}</td>
                    <td>{{$book->autor}}</td>
                    <td>
                        <form action="{{ route ('books.destroy', $book->id) }}" method="POST">
                            @CSRF
                            @method('DELETE')
                            <a href="/project-g/public/books/{{$book->id}}/edit" class="btn btn-primary ">Editar</a>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection