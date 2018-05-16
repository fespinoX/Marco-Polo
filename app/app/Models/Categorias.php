<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //indico el nombre de la tabla y la PK
	
	/** @var string habitats */
	protected $table = "categorias";
	
	/** @var string PK */
	protected $primaryKey = "id_categoria";
	
	public function preguntas()
    {
    	return $this->hasMany(Preguntas::class, 'id_categoria', 'id_categoria');
    }
}