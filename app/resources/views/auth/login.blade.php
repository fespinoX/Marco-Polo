@extends('layout.main')

@section('title')
Iniciar Sesión
@stop

@section('contenido')
<h1>Logueate, capo</h1>

@if(Session::has('status'))
<div class="alert alert-danger">{{ Session::get('status') }}</div>
@endif

<form action="{{ route('auth.doLogin') }}" method="post">
	@csrf
	<div class="form-group">
		<label for="email">Usuario: </label>
		<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
		@if($errors->has('email'))
			<div class="alert alert-danger">{{ $errors->first('email') }}</div>
		@endif
	</div>

	<div class="form-group">
		<label for="password">Password: </label>
		<input type="password" name="password" id="password" class="form-control">
		@if($errors->has('password'))
			<div class="alert alert-danger">{{ $errors->first('password') }}</div>
		@endif
	</div>

	<button class="btn btn-block btn-primary">Entrale</button>
</form>
@stop