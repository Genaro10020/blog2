@extends('layouts.plantilla')
@section('titulo','create')
@section('content')
    <h1>Ahora vas a creear tu curso</h1>
   
    <form action="{{route('cursos.store')}}" method="post">
     @csrf {{--nos agrega un token de seguridad--}}
        <label >
            Nombre
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion"  rows="5"></textarea>
        </label>
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        
        @enderror
        <br>
       
            <button type="submit">Enviar Formulario</button>
    </form>
@endsection