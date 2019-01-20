<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    protected $fillable=['id','academic_title','school','start_date','finish_date','languages_id'];
}

