<?php
/** @var Pregunta $pregunta */
/** @var Categoria[] $categorias */
?>

@extends('layout.main')

@section('title')
Editar respuesta
@stop

@section('contenido')
  <h1>Editar Respuesta</h1>

<?php /*
  @if($errors->any())
    <ul>
      @foreach($errors->all() as $msg)
      <li>{{ $msg }}</li>
      @endforeach
    </ul>
  @endif
*/ ?>

  <form action="<?= route('preguntas.editar', ['id' => $pregunta->id_pregunta]);?>" method="post">
    <!-- Agregamos el token de verificación contra CSRF. -->
    @csrf
    <!-- Indicamos que el form va a utilizar el verbo PUT. -->
    <!--<input type="hidden" name="_method" value="PUT">-->
    {{-- method_field('PUT') --}}
    @method('PUT')
    <div class="form-group">
      <label for="respuesta">Respuesta</label>
      <textarea name="respuesta" id="respuesta" cols="30" rows="10">{{ old('respuesta', $pregunta->respuesta) }}</textarea>
      
      @if($errors->has('respuesta'))
      <div class="alert alert-danger">{{ $errors->first('respuesta') }}</div>
      @endif
    </div>

    <button class="btn btn-primary">Responder</button>
  </form>
@stop