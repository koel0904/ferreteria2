<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Book extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'equipos';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marca', 'modelo', 'tipo', 'precio', 'ref',];
}