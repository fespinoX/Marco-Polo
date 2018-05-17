<?php
/** @var Pregunta $pregunta */
/** @var Categoria[] $categorias */
?>
@extends('layout.main')
@section('title')
Editar respuesta
@stop
@section('contenido')
<section id="edit">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-sm-6 formu">
        <h2>Editar Respuesta</h2>
        <p class="pregunta">{{ $pregunta->pregunta }}</p>
        <form action="<?= route('preguntas.editar', ['id' => $pregunta->id_pregunta]);?>" method="post">
          @csrf
          {{-- method_field('PUT') --}}
          @method('PUT')
          <div class="form-group">
            <textarea name="respuesta" id="respuesta" cols="30" rows="10">{{ old('respuesta', $pregunta->respuesta) }}</textarea>
            
            @if($errors->has('respuesta'))
            <div class="alert alert-danger">{{ $errors->first('respuesta') }}</div>
            @endif
          </div>
          <button class="btn btn-primario">Responder</button>
        </form>
      </div>
    </div>
  </div>
</section>
@stop