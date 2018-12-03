<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anuncios extends Model
{
    protected $fillable=['id','user_id','titol','nombre_empresa','descripcio','provincia','tipocontrato','duracion','jornada','salario'];
}
