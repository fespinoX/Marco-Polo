<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preguntas;
use App\Models\Categorias;

class PreguntasController extends Controller
{
    public function index()
    {
        $preguntas = Preguntas::with('categorias', 'users')->get();
        return view('preguntas/listapreguntas', [
            'preguntas' => $preguntas
        ]);
    }

    public function detallepregunta($id_pregunta)
    {
    	$pregunta = Preguntas::find($id_pregunta);

    	return view('preguntas.detallepregunta', [
    		'pregunta' => $pregunta
		]);
    }



    public function formAlta()
    {
        $categorias = Categorias::all();
        $categoriasSelect = array_pluck($categorias, 'categoria', 'id_categoria');
        return view(
            'preguntas.altapregunta', 
            compact('categorias', 'categoriasSelect')
        );
    }

    public function crear(Request $request)
    {
        $inputData = $request->all();
        $inputData["respondida"] = false;
        //dd($inputData);

        $request->validate(Preguntas::$rules, [
            'pregunta.required' => 'La pregunta no puede estar vacía',
            'pregunta.min' => 'Esa pregunta es muy cortita, no seas vago!'
        ]);

        Preguntas::create($inputData);

        return redirect()->route('preguntas.index');
    }



   public function formEditar($id)
    {
        $pregunta = Preguntas::find($id);
        $categorias = Categorias::all();

        $categoriasSelect = array_pluck($categorias, 'categoria', 'id_categoria');
        return view(
            'preguntas.form-editar', 
            compact('categorias', 'categoriasSelect', 'pregunta')
        );
    }

    public function editar(Request $request, $id)
    {

        $inputData = $request->input();
        $inputData["respondida"] = true;
        //dd($inputData);

        $pregunta = Preguntas::find($id);

        $pregunta->update($inputData);

        return redirect()->route('preguntas.index')
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










