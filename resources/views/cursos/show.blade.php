@extends('layouts.plantilla')
@section('titulo','Curso'.$curso->name)
@section('content')
<h1>Bienvenido al curso {{$curso->name}} </h1>
<a href="{{route('cursos.index')}}">Volver al curso</a><br>
<a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
<p><strong>Categoris:</strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>

<form action="{{route('cursos.destroy',$curso)}}" method="POST">
 @csrf
    @method('delete')   
    <button type="submit">Eliminar</button>
</form>
@endsection