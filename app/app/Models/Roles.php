<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

	protected $table = "roles";
	protected $primaryKey = "id_rol";
    protected $fillable = ['rol'];
		
	public function categoria(){
		return $this->belongsTo(Users::class, 'id', 'id');
	}
}