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
    <h1>Marco Polo</h1>
    <p>Esta es la vista pelada</p>

    <a class="nav-link" href="<?= url('preguntas/nueva');?>">Nueva pregunta</a>
@stop