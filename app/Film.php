<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'data_film';
    protected $guarded = ['id','created_at','updated_at'];
}
