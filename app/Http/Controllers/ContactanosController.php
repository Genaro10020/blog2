<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
           'name'=>'required',
           'correo'=>'required|email', //defino que sea tipo email de lo contrario no pasa
           'mensaje'=>'required',     
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('iscgenarovp@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');//mandamos variablel de session para indicar que si existe nos coloque que el mensaje fue enviado
    }
}
