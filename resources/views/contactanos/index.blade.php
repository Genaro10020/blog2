@extends('layouts.plantilla')
@section('titulo','Contactanos')
@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        @error('name')
            <p><strong>error {{$message}}</strong></p>
        @enderror
        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        @error('correo')
        <p><strong>Error:</strong>{{$message}}</p>
        @enderror
        <label>
            Mensaje:
            <br>
            <input type="text" name="mensaje">
        </label>
        <br>
        @error('mensaje')
            <p><strong>Error</strong>{{$message}}</p>
        @enderror
        <button type="submit"> Enviar un mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection