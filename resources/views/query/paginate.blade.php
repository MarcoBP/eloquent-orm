@extends('layout')

@section('content')

<h1 class="page-header">
	Paginate Eloquent
</h1>
<p>
	{{ $users->total() }} Registros
</p>
<p>
	Pagina {{ $users->currentPage() }} de {{ $users->lastPage() }}
</p>
<table class="table table-hover table-striped">
	@include('partials.head-users')
	<tbody>
		@include('partials.list-users')
	</tbody>
</table>

{!! $users->render() !!}

@stop