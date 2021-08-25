@extends('layouts.plantilla')
@section('titulo','Cursos Edit')
@section('content')
    <h1>En esta pagina podras editar un curso</h1>
   
    <form action="{{route('cursos.update',$curso)}}" method="post">
     @csrf {{--nos agrega un token de seguridad--}}
     @method('put'); {{--laravel enteresa que va a pasar por put por ser una actualizacion--}}
        <label >
            Nombre
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label><br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion"  rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        <br>
        @error('categoria')
            <small>*{{$message}}</small>
        @enderror
        <br>
            <button type="submit">Actualizar Formulario</button>
    </form>
@endsection