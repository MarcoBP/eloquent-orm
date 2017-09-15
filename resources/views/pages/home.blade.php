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
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Genero</th>
				<th>Biografia</th>
			</tr>
		</thead>
		<tbody>
			@include('partials.list-users')
		</tbody>
	</table>	

@stop