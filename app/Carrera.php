<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = ['nombre', 'logo', 'numero'];

    public function libros(){
    	return $this->hasMany('App\Libro');
    }
}
