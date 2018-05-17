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
			'pregunta' => 'Hay suficiente dinero para financiar un viaje a la costa este de la galaxia Neymar?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>1,
			'id'=>3
		]);
		Preguntas::create([
			'pregunta' => 'Me gustaría crear el ministerio de "No Hay problema" y ser su ministro. Es esto viable?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>2,
			'id'=>2
		]);
		Preguntas::create([
			'pregunta' => 'Puedo llamar a casa?',
			'respondida' => true,
			'respuesta'=> 'Eh... no.',
			'id_categoria'=>5,
			'id'=>3
		]);
		Preguntas::create([
			'pregunta' => 'Conquistar marte posibilidades hay de?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>3,
			'id'=>4
		]);
		Preguntas::create([
			'pregunta' => 'Qué necesitaríamos para organizar una fiesta con chicas humanas?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>4,
			'id'=>7
		]);
		Preguntas::create([
			'pregunta' => 'Si hubiese mundos paralelos, podríamos conquistarlos?',
			'respondida' => true,
			'respuesta'=> 'Ya los hemos conquistado o los estamos conquistando ahora o los estaremos conquistando en el futuro... O todo al mismo tiempo.',
			'id_categoria'=>3,
			'id'=>6
		]);
		Preguntas::create([
			'pregunta' => 'Puedo infiltrarme en la tierra? De disfraz se me ocurre usar un par de anteojos',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>4,
			'id'=>5
		]);
		Preguntas::create([
			'pregunta' => 'Hay problemas?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>5,
			'id'=>2
		]);
		Preguntas::create([
			'pregunta' => 'Si la inflamación no se va, el dolor vuelve?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>5,
			'id'=>6
		]);
		Preguntas::create([
			'pregunta' => 'Comprarme un nuevo sable quiero. Hay plata?',
			'respondida' => false,
			'respuesta'=> null,
			'id_categoria'=>1,
			'id'=>4
		]);												
    }
}