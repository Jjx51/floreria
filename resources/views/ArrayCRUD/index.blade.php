@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

<div class="container">
	<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Lista de Arreglos
					<a href="{{ route('Array.create') }}" class="btn btn-primary pull-right">Crear Nuevo Arreglo</a>
					</h2>
					<br>
				</div>

				<div class="panel-body">
					@foreach ($arrays as $array)
						<div class="row">
							<div class="col-md-4 col-md-offset-2">
								<h3>imagen</h3>
								{{$array->imagen}}
							</div>
							<div class="col-md-6">
								<h4>id: {{$array->id}}</h4>
								<h4>Codigo: {{$array->Codigo}}</h4>
								<h4>nombre; {{$array->NombreAttangements}}</h4>
								<div class="form-group">
									<a href="{{url('/Array/'.$array->id.'/edit')}}" class="btn btn-success btn-block">Editar</a> 
								</div>
								@include('ArrayCRUD.delete',['array'=> $array])
							</div>
						</div>
						<hr>
					@endforeach
					{{ $arrays->render()}}
				</div>
		</div>
	</div>
</div>


	

@endsection