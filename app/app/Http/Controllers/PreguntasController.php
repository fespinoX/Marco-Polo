<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preguntas;
use App\Models\Categorias;

class PreguntasController extends Controller
{
    public function index()
    {
        // Traemos TODAS las películas.
        // En forma de array de Peliculas.
        /** @var Pelicula[] */
        // all() trae TODOS los registros, pero sin
        // relaciones.
        //$preguntas = Pelicula::all();
        // with() permite indicarle a Laravel que cargue
        // ansiosamente (eager load) las relaciones que
        // indiquemos por parámetro. El nombre de cada
        // relación es el que hayamos definido en la
        // función del modelo.
        // El get() es la forma de ejecutar la consulta.
        $preguntas = Preguntas::with('categorias', 'users')->get();

        //return view('preguntas.listado', [
        return view('preguntas/listapreguntas', [
            'preguntas' => $preguntas
        ]);
    }


    /**
     * @param $id_pregunta El id pasado a la ruta (lo que
     *				marcamos como {id_pregunta}).
     */
    public function detallepregunta($id_pregunta)
    {
    	// Buscamos la pregunta por su id.
    	$pregunta = Preguntas::find($id_pregunta);

    	//dd($pregunta);
    	return view('preguntas.detallepregunta', [
    		'pregunta' => $pregunta
		]);
    }



    public function formAlta()
    {
        $categorias = Categorias::all();

        // Vamos a "desplumar" el array de los resultados de
        // categorias, para generar un array con el formato
        // que nos pide la clase Form en el método select.
        $categoriasSelect = array_pluck($categorias, 'categoria', 'id_categoria');


        //dd($categoriasSelect);

        /*return view('preguntas.form-alta', [
            'categorias' => $categorias
        ]);*/
        return view(
            'preguntas.altapregunta', 
            compact('categorias', 'categoriasSelect')
        );
    }

    /**
     * @param $request Request
     */
    public function crear(Request $request)
    {
        // La clase Request maneja toda la info de la 
        // petición.
        $inputData = $request->all();
        $inputData["respondida"] = false;
        //dd($inputData);

        $request->validate(Preguntas::$rules, [
            'pregunta.required' => 'La pregunta no puede estar vacía',
            'pregunta.min' => 'Esa pregunta es muy cortita, no seas vago!'
        ]);

        // Creamos la nueva Pregunta.
        Preguntas::create($inputData);

        // Redireccionamos al usuario al listado.
        //return redirect(url('peliculas'));
        // Redireccionamos usando el nombre de la ruta.
        return redirect()->route('preguntas.index');
    }



}





