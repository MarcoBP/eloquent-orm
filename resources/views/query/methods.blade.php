@extends('layout')

@section('content')

<h1 class="page-header">
	{{ $title }}
</h1>
<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th style=”display:none”>Email</th>
			<th>Genero</th>
			<th>Biografia</th>
		</tr>
	</thead>
	<tbody>
		@include('query.partials.list-users')
	</tbody>
</table>

@stop