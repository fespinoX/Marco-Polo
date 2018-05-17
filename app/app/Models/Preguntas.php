<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preguntas extends Model
{
    //indico el nombre de la tabla y la PK
	
	/** @var string preguntas */
	protected $table = "preguntas";
	
	/** @var string PK */
	protected $primaryKey = "id_pregunta";
	
	/** @var array Los campos que se pueden cargar de manera masiva */
	//De esta forma evito que me mande campos indeseados
    protected $fillable = ['pregunta', 'respuesta', 'id_categoria', 'id'];
	
    //protected $guarded = [];
	/** @var array reglas de validación */
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





