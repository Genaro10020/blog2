<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }


    public function store(Request $request){ /*Metodo Request con objeto request*/
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->name;
        $curso->categoria = $request->name;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){
       return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
       /* $curso = Curso::find($id);
        return $curso; forma1 de recupara el registro*/
    }

    public function update(Request $request,Curso $curso){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

       $curso->save();

       return redirect()->route('cursos.show',$curso);

    }

   
}
