<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
    protected $fillable = ['id','fecha','hora','persona'];
    protected $table = 'registros';
}
