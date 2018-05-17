<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Este use es para importar el Trait que permite el
// uso de SoftDelete.
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
    protected $fillable = ['pregunta', 'respuesta'];
	
	/** @var array reglas de validación */
	public static $rules = [
		'pregunta' => 'required|min:5|max:400',
	];
	
    /**
     * Este método va a crear la relación con el modelo
     * de Director.
     * El nombre es arbitrario, pero lo vamos a necesitar
     * usar después para obtener sus datos.
     */
    public function categorias()
    {
        // belongsTo define una parte de la relación de
        // 1 a muchos. Este es el método que usamos en
        // el modelo de la tabla del "muchos".
        // Parámetros:
        // 1. El nombre de la clase del modelo al que
        //  vamos a asociarlo. Debe incluir el namespace.
        // 2. 'foreign_key'. Un string con el nombre del
        //  campo de la fk. Por defecto, Laravel asume
        //  que todas las FKs llevan el formato de
        //  "nombremodelo_id".
        // 3. 'other_key'. Un string con el nombre
        //  de la PK que tenemos que referenciar.
        //  Por defecto, Laravel que todas las PKs se 
        //  llaman 'id'.
        return $this->belongsTo(Categorias::class, 'id_categoria', 'id_categoria');
    }

    public function users()
    {
        // belongsTo define una parte de la relación de
        // 1 a muchos. Este es el método que usamos en
        // el modelo de la tabla del "muchos".
        // Parámetros:
        // 1. El nombre de la clase del modelo al que
        //  vamos a asociarlo. Debe incluir el namespace.
        // 2. 'foreign_key'. Un string con el nombre del
        //  campo de la fk. Por defecto, Laravel asume
        //  que todas las FKs llevan el formato de
        //  "nombremodelo_id".
        // 3. 'other_key'. Un string con el nombre
        //  de la PK que tenemos que referenciar.
        //  Por defecto, Laravel que todas las PKs se 
        //  llaman 'id'.
        return $this->belongsTo(Users::class, 'id', 'id');
    }    
}





