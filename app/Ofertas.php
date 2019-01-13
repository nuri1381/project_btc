<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{
    protected $fillable=['id','user_id','titol','nombre_empresa','descripcio','provincia','tipocontrato','duracion','jornada','salario','requisitos'];
}
