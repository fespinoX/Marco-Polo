<?php
/** @var Pregunta $pregunta */
?>
@extends('layout.main')
@section('title')
Pregunta {{ $pregunta->pregunta }}
@stop
@section('contenido')
<section id="detalle">
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-6 text-center">
				<img src="../img/profile/{{ $pregunta->users->foto }}" class="media-object">
				<p class="nombre">- {{ $pregunta->users->name }}</p>
				<p class="badge">{{ $pregunta->categorias->categoria }}</p>
				<p>Planeta: {{ $pregunta->users->planeta }}</p>				
				<p class="pregunta">{{ $pregunta->pregunta }}</p>				
				<p class="respuesta">{{ $pregunta->respuesta }}</p>

				@if(Auth::user()->id_rol == 1)
				<a class="btn btn-primario" href="<?= route('preguntas.formEditar', ['id' => $pregunta->id_pregunta]);?>">Responder</a>
				<a class="btn btn-danger" href="<?= route('preguntas.confirmarEliminar', ['id' => $pregunta->id_pregunta]);?>">Eliminar</a>
				@endif
				
			</div>
		</div>
	</div>
</section>
@stop