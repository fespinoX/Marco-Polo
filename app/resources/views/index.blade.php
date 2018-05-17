<?php
/*
La directiva extends permite tomar otro template de base.
La directiva "section" permite definir el contenido a
ubicar dentro de algún "yield" del template extendido.
*/
?>
@extends('layout.main')
@section('title')
Marco Polo
@stop
@section('contenido')


<section id="cover">
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-10 cont">
				<h1>Marco Polo</h1>
				<p>Terrícolas abstenerse</p>
			</div>
		</div>
	</div>
</section>


@if(Auth::check())
@if(Auth::user()->id_rol == 2)
<a class="nav-link" href="<?= url('preguntas/nueva');?>">Nueva pregunta</a>
@endif
@endif
@stop