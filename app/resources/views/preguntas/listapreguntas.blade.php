<?php
/** @var Pregunta[] $preguntas */
?>

@extends('layout.main')

@section('title')
Marco Polo
@stop

@section('contenido')
  <h1>Marco Polo</h1>
  <p>Nomonomnomnomnomnom</p>

<h2>Preguntas pendientes</h2>

@foreach($preguntas as $singlePregunta)
@if ($singlePregunta->respondida == false)
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
