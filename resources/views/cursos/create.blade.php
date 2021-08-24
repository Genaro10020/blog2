@extends('layouts.plantilla')
@section('titulo','create')
@section('content')
    <h1>Ahora vas a creear tu curso</h1>
   
    <form action="{{route('cursos.store')}}" method="post">
     @csrf {{--nos agrega un token de seguridad--}}
        <label >
            Nombre
            <br>
            <input type="text" name="name">
        </label><br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion"  rows="5"></textarea>
        </label><br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria">
        </label><br>
            <button type="submit">Enviar Formulario</button>
    </form>
@endsection