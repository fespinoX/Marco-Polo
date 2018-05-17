<?php

use Illuminate\Database\Seeder;
use App\Models\Preguntas;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //carga de datos
		Preguntas::create([
			'pregunta' => 'Hay plata? Tenemos plata? Danos plata! Plata plata plata',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>1,
			'id'=>1
		]);
		Preguntas::create([
			'pregunta' => 'Puedo ser el ministro del aguante todo?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>2,
			'id'=>1
		]);
		Preguntas::create([
			'pregunta' => 'Vamos a colonizar marte?',
			'respondida' => true,
			'respuesta'=> 'Sí, sí vamos!',
			'id_categoria'=>3,
			'id'=>1
		]);
		Preguntas::create([
			'pregunta' => 'Aguante todo?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>2,
			'id'=>1
		]);
    }
}