<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //Forma 1, coloca los campos que deseas que se guarden
    /*protected $fillable = ['name','descripcion','categoria'];*///con esto unicamente valida e inserta estos campos
    //Forma 2, coloca los campos que no deseas que se guarden o ignore
    protected $guarded = ['status'];// calocampos los campos protegidos
     
    public function getRouteKeyName()
    {
        return 'slug';// es para que me retorno o me muestre el slug en lugar del id
    }

}
