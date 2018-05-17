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



   public function formEditar($id)
    {
        $pregunta = Preguntas::find($id);
        $categorias = Categorias::all();

        // Vamos a "desplumar" el array de los resultados de
        // directores, para generar un array con el formato
        // que nos pide la clase Form en el método select.
        $categoriasSelect = array_pluck($categorias, 'categoria', 'id_categoria');

        /*return view('peliculas.form-alta', [
            'directores' => $directores
        ]);*/
        return view(
            'preguntas.form-editar', 
            compact('categorias', 'categoriasSelect', 'pregunta')
        );
    }

    public function editar(Request $request, $id)
    {
        /*
        $request->validate(Preguntas::$rules, [
            'nombre.required' => 'El nombre de la película no puede estar vacío.',
            'nombre.min' => 'El nombre de la película debe tener al menos :min caracteres.',
            'genero.required' => 'El género de la película no puede estar vacío.',
            'genero.min' => 'El género de la película debe tener al menos :min caracteres.',
            'precio.required' => 'El precio de la película no puede estar vacío.',
            'precio.numeric' => 'El precio debe ser un valor numérico.'
        ]);
        */

        $inputData = $request->input();
        $inputData["respondida"] = true;
        //dd($inputData);

        // Traemos la película. Esto sirve también a modo
        // de verificación de que exista.
        $pregunta = Preguntas::find($id);

        // Actualizamos la película con esta información.
        $pregunta->update($inputData);

        return redirect()->route('preguntas.index')
            // with() permite agregar un valor que
            // se le mande a la próxima pantalla, que
            // dura solo una carga, y luego se elimina.
            // Esto se suele llamar "mensajes flash".
            ->with('status', 'Se agregó la respuesta');
    }

    public function confirmarEliminar($id)
    {
        $pregunta = Preguntas::find($id);

        return view('preguntas.confirmarEliminar', compact('pregunta'));
    }

    public function eliminar($id)
    {
        $pregunta = Preguntas::find($id);
        $pregunta->delete();


        return redirect()->route('preguntas.index');
    }
}










