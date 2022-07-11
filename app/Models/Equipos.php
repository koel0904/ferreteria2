<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $fillable=['marca','modelo','tipo','precio','ref'];
}
