<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //indico el nombre de la tabla y la PK
	
	/** @var string roles */
	protected $table = "roles";
	
	/** @var string PK */
	protected $primaryKey = "id_rol";
	
	/** @var array Los campos que se pueden cargar de manera masiva */
	//De esta forma evito que me mande campos indeseados
    protected $fillable = ['rol'];
		
	public function categoria(){
		return $this->belongsTo(Users::class, 'id_user', 'id_user');
	}
}