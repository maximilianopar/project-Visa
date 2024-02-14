@extends('layouts.app')

@section('content')
    <div class="w-75 mx-auto">
        <h3 class="extra-bold">Contacto</h3>
        
    </div>

    <div  class="w-75 mx-auto">
        <form action="/project-g/public/contactos" method="POST">
            @CSRF

            <div class="form-group mt-3">
                <input class="visually-hidden" id="id" name="id">
            </div>

            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
            </div>

            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Mensaje</label>
                <textarea class="form-control" type="text" id="mensaje" name="mensaje" rows="4" placeholder="Ingrese el mensaje"></textarea>
            </div>

            @error('mensaje')
                <div class="alert alert-danger">{{ $message }}</div>   
            @enderror

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>
    </div>

@endsection