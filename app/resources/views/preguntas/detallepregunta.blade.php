<?php
/** @var Pregunta $pregunta */
?>

@extends('layout.main')

@section('title')
Pregunta {{ $pregunta->pregunta }}
@stop

@section('contenido')
  <h1>{{ $pregunta->pregunta }}</h1>
  <p>{{ $pregunta->users->nombre }}</p>
      <p>{{ $pregunta->users->planeta }}</p>
          <p>{{ $pregunta->pregunta }}</p>
    <p>{{ $pregunta->respuesta }}</p>
    <p>{{ $pregunta->categorias->categoria }}</p>
@stop