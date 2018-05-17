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
    <div class="row justify-content-md-center">
      <div class="col-md-8 text-left">
        <h2>Preguntas pendientes</h2>

        @foreach($preguntas as $singlePregunta)
        @if ($singlePregunta->respondida == false)
        
        <a class="media pregunta pendiente" href="<?= url('preguntas/' . $singlePregunta->id_pregunta);?>">
          <div class="media-left">
            <img src="img/profile/{{ $singlePregunta->users->foto }}" class="media-object">
          </div>
          <div class="media-body">
            <h3>{{ $singlePregunta->users->name }}</h3>
            <p class="badge">{{ $singlePregunta->categorias->categoria }}</p>
            <p class="preg">{{ $singlePregunta->pregunta }}</p>
          </div>
        </a>
        @endif
        @endforeach
      </div>

      <div class="col-md-8 text-left">
        <h2>Preguntas respondidas</h2>
        
        @foreach($preguntas as $singlePregunta)
        @if ($singlePregunta->respondida == true)
        <a class="media pregunta respondida" href="<?= url('preguntas/' . $singlePregunta->id_pregunta);?>">
          <div class="media-left">
            <img src="img/profile/{{ $singlePregunta->users->foto }}" class="media-object">
          </div>
          <div class="media-body">
            <h3>{{ $singlePregunta->users->name }}</h3>
            <p class="badge">{{ $singlePregunta->categorias->categoria }}</p>
            <p class="preg">{{ $singlePregunta->pregunta }}</p>
          </div>
        </a>
      
        @endif
        @endforeach


    </div>
  </div>
</section>

@stop