<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
	
	protected $table = "categorias";
	
	protected $primaryKey = "id_categoria";
	
	public function preguntas()
    {
    	return $this->hasMany(Preguntas::class, 'id_categoria', 'id_categoria');
    }
}