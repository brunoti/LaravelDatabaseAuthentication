@extends('layout.default')

@section('content')

<div class="container">
	<div class="page-header">
		<h1>Bem-vindo, {{$usuario}}!</h1>		
	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($usuarioLista as $user)
					<tr>
						<th>{{$user->username}}</th>
						<th>{{$user->email}}</th>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>		
	</div>
</div>

@stop