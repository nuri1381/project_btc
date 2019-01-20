<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{
    protected $fillable=['id','title','nombre_empresa','description','requirements','tipocontrato','duration','working_day','creation_date','salary','image'];
}
