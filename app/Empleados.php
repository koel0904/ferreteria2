<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable=['nombre','ape','sex','edad','tel'];
}
