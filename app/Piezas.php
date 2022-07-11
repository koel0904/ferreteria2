<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piezas extends Model
{
    protected $fillable=['marca','modelo','tipo','precio','ref'];
}
