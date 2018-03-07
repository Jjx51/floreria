@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

<div class="container">
	<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Lista de Arreglos</h2>
					<a href="#" class="btn btn-sm btn-primary pull-right">crear</a>
					<br>
				</div>

				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>id</th>
								<th>Responsable</th>
								<th>Status</th>
								<th>Codigo</th>
								<th>nombre</th>
								<th>imagen</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($arrays as $array)
								<tr>
									<td>{{$array->id}}</td>
									<td>{{$array->user->name}}</td>
									<td>{{$array->status->status}}</td>
									<td>{{$array->Codigo}}</td>
									<td>{{$array->NombreAttangements}}</td>
									<td>{{$array->imagen}}</td>
								</tr>
							@endforeach

						</tbody>

					</table>
				</div>


		</div>
	</div>
</div>


	

@endsection



