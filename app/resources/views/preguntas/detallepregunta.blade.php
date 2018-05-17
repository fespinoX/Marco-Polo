<?php
/** @var Pregunta $pregunta */
?>

@extends('layout.main')

@section('title')
Pregunta {{ $pregunta->pregunta }}
@stop

@section('contenido')
  <h1>{{ $pregunta->pregunta }}</h1>
  <p>{{ $pregunta->users->name }}</p>
      <p>{{ $pregunta->users->planeta }}</p>
          <p>{{ $pregunta->pregunta }}</p>
    <p>{{ $pregunta->respuesta }}</p>
    <p>{{ $pregunta->categorias->categoria }}</p>

@if(Auth::user()->id_rol == 1)    
    <a href="<?= route('preguntas.formEditar', ['id' => $pregunta->id_pregunta]);?>">Responder</a>

    <a href="<?= route('preguntas.confirmarEliminar', ['id' => $pregunta->id_pregunta]);?>">Eliminar</a>    
@endif    

@stop