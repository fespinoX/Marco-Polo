<?php
/** @var Pregunta $pregunta */
?>
@extends('layout.main')
@section('title')
Eliminar Pregunta {{ $pregunta->nombre }}
@stop
@section('contenido')
<section id="edit">
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-sm-6 formu">
				<h2>Confirmar eliminación</h2>
				<p>Borramos esta pregunta?</p>
				<form method="POST" action="{{ route('preguntas.eliminar', ['id' => $pregunta->id_pregunta]) }}">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger">Sí!</button>
				</form>
			</div>
		</div>
	</div>
</section>
@stop