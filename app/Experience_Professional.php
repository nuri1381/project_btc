<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience_Professional extends Model
{
    protected $fillable=['id','company','position','start_date','finish_date','description'];
}

