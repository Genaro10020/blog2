@extends('layouts.plantilla')
@section('titulo', 'index')
@section('content')
    <h1>estas en INDEX</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
   <ul> 

    @foreach ($cursos as $curso)
        <li>
 <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
            
            
        </li>
    @endforeach
   </ul>
    {{$cursos->links()}}
@endsection