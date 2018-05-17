<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;

class IndexController extends Controller
{
    public function home() {
    	return view('index');
    }

	public function contacto()
	{
		// Devolvemos la vista que queremos mostrar.
		// Para ayudarnos, tenemos la función view().
		// Parámetros:
		// 1. La ruta de la vista, partiendo de la 
		//		carpeta resources/views. Permite además
		//		obviar las extensiones.
		return view('contacto');
	}
}