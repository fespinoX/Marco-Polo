<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //indico el nombre de la tabla y la PK
	
	/** @var string habitats */
	protected $table = "users";
	
	/** @var string PK */
	protected $primaryKey = "id";
	
	public function preguntas()
    {
    	return $this->hasMany(Preguntas::class, 'id', 'id');
    }
}