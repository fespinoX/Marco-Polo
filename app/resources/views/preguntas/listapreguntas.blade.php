<?php
/** @var Pregunta[] $preguntas */
?>

@extends('layout.main')

@section('title')
Marco Polo
@stop

<?php
//dd(Auth::user()->id_rol);
?>

@section('contenido')


<section id="preguntas">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 text-right">
        <h1>Preguntas pendientes</h1>
      </div>
      <div class="col-md-4 text-left">
        @foreach($preguntas as $singlePregunta)
@if ($singlePregunta->respondida == false)
<div>
  <div>
    <p>{{ $singlePregunta->users->name }}</p>

  </div>
  <div>
    <p>{{ $singlePregunta->pregunta }}</p>
    <p>{{ $singlePregunta->categorias->categoria }}</p>
  </div>
  <div>
    <a href="<?= url('preguntas/' . $singlePregunta->id_pregunta);?>">Detalle</a>
  </div>
</div>
@endif
@endforeach
      </div>
    </div>
  </div>
</section>



<h2>Preguntas respondidas</h2>

@foreach($preguntas as $singlePregunta)
@if ($singlePregunta->respondida == true)
<div>
  <div>
    <p>{{ $singlePregunta->users->nombre }}</p>

  </div>
  <div>
    <p>{{ $singlePregunta->pregunta }}</p>
    <p>{{ $singlePregunta->categorias->categoria }}</p>
  </div>
  <div>
    <a href="<?= url('preguntas/' . $singlePregunta->id_pregunta);?>">Detalle</a>
  </div>
</div>
@endif
@endforeach



@stop
