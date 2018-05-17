@extends('layout.main')
@section('title')
Marco Polo
@stop
@section('contenido')
<section id="cover">
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-10 col-xs-12 cont">
				<h1>Marco Polo</h1>
				
				@if(Auth::check())
				@if(Auth::user()->id_rol == 2)
				<a class="btn btn-primario" href="<?= url('preguntas/nueva');?>">Nueva pregunta</a>
				@endif
				@endif

			</div>
		</div>
	</div>
</section>
@stop