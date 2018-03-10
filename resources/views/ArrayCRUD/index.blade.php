@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
			@include('partials.alert')
			@include('partials.errors')
        </div>
	</div>
</div>



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
							<div class="col-md-4">
							
								@if ($array->imagen)
									<img  class='img-thumbnail' width="220" height="220" src="{{$array->imagen}}">
									
								@else
									<img src="img/arreglos/sin-imagen.png" width="220" height="220" class='img-thumbnail'>
									
								@endif
								

							</div>
							<div class="col-md-4">
								<h4>id: {{$array->id}}</h4>
								<h4>Codigo: {{$array->Codigo}}</h4>
								<h4>nombre; {{$array->Nombre}}</h4>
								
							</div>

							<div class="col-md-4">
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