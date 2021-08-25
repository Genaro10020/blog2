<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes() // esta funcion la creamos 
    //y cuando vea name colocare la leyenda nombre del curso
    {
        return[
            'name'=> 'nombre del curso',
        ];
    }


    public function messages()//personalizar mensaje y tienen dos reglas 
    //de validacion campo.validacion 'descripcion.required
    {
        return[
            'descripcion.required'=> 'Debe de ingresar una descripcion del curso'
        ];
    }
}
