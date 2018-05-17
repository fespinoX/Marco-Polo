<?php
/** @var Pregunta $pregunta */
/** @var Categoria[] $categorias */
?>
@extends('layout.main')
@section('title')
Preguntame!
@stop
@section('contenido')
<section id="edit">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-sm-6 formu">
        <H2>Nueva pregunta</H2>
        <form action="<?= url('/preguntas/nueva');?>" method="post">
          @csrf
          
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
          <input type="hidden" name="respondida" id="respondida">
          <div class="form-group">
            <label for="pregunta">Pregunta</label>
            <textarea name="pregunta" id="pregunta" cols="30" rows="10">{{ old('pregunta') }}</textarea>
            @if($errors->has('pregunta'))
            <div class="alert alert-danger">{{ $errors->first('pregunta') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="id_categoria">Categoría</label>
            <select name="id_categoria" id="id_categoria" class="form-control">
              @foreach($categorias as $categoria)
              <option value="{{ $categoria->id_categoria }}">
                {{ $categoria->categoria }}
              </option>
              @endforeach
            </select>
            @if($errors->has('id_categoria'))
            <div class="alert alert-danger">{{ $errors->first('id_categoria') }}</div>
            @endif
          </div>
          <button class="btn btn-primario">Crear</button>
        </form>
      </div>
    </div>
  </div>
</section>
@stop