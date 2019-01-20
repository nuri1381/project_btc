<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $fillable=['id','studies_id','professional_experiences_id','data_of_interest','image'];
}

