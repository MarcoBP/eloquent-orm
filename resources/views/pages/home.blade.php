@extends('layout')

@section('content')

	<div class="jumbotron">
      <h1>Curso Eloquent ORM</h1>
      <p>Texto</p>
    </div>

	<h1 class="page-header">
		Ultimos Usuarios Registrados
	</h1>
	<table class="table table-hover table-striped">
		@include('partials.head-users')
		<tbody>
			@include('partials.list-users')
		</tbody>
	</table>	

@stop