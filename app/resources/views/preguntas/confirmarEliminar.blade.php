<?php
/** @var Pregunta $pregunta */
?>

@extends('layout.main')

@section('title')
Eliminar Pregunta {{ $pregunta->nombre }}
@stop

@section('contenido')
  <h1>Confirmar eliminación</h1>
  <p>¿Está seguro que desea eliminar esta pregunta?</p>



  <form method="POST" action="{{ route('preguntas.eliminar', ['id' => $pregunta->id_pregunta]) }}">
  	@csrf
  	@method('DELETE')
  	<button class="btn btn-danger">Eliminar</button>
  </form>
@stop