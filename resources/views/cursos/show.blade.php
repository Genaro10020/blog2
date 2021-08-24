@extends('layouts.plantilla')
@section('titulo','Curso'.$curso->name)
@section('content')
<h1>Bienvenido al curso {{$curso->name}} </h1>
<a href="{{route('cursos.index')}}">Volver al curso</a>
<p><strong>Categoris:</strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>
@endsection