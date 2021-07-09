<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    protected $table = 'calculadoras';



    protected $fillable =['n1','op','n2']; 
}
