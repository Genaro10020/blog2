<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
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


    public function store(StoreCurso $request){ /*Metodo Request con objeto request*/
       

       
        /*$curso = new Curso(); // todo esto es similar a lo que esta abajo
        $curso->name = $request->name;
        $curso->descripcion = $request->name;
        $curso->categoria = $request->name;
        $curso->save();*/
        
        /*$curso = Curso::create([/*crea el objeto y salva a la vez forma 2*/ 
        /*    'name'=> $request->name,
            'descripcion'=> $request->descripcion,
            'categoria'=> $request->categoria
        ]);*/

        $curso = Curso::create($request->all());
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


        $request->validate([
        'name'=>'required',
        'descripcion'=>'required',
        'categoria' =>'required'  
        ]);
        //Forma 1
       /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

       $curso->save();*/
        //Forma 2
       $curso->update($request -> all());

       return redirect()->route('cursos.show',$curso);

    }


    public function destroy(Curso $curso){
        $curso ->delete();
        return redirect()->route('cursos.index',$curso);
    }
}
