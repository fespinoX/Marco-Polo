<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preguntas extends Model
{

	protected $table = "preguntas";
	protected $primaryKey = "id_pregunta";
    protected $fillable = ['pregunta', 'respuesta', 'id_categoria', 'id', 'respondida'];
		public static $rules = [
		'pregunta' => 'required|min:5|max:400',
	];
	
    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'id_categoria', 'id_categoria');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'id', 'id');
    }    
}





