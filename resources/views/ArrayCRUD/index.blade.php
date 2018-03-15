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
	
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-7 ">
						<h2>Lista de Arreglos</h2>
					</div>
					<br>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<a href="{{ route('Array.create') }}" class="btn btn-default pull-right">
							Crear Nuevo Arreglo
						</a>
					</div>
				</div>
			</div>

			<div class="panel-body">
				@foreach ($arrays as $array)
					<div class="row">
						<div class="col-md-4 col-sm-6" align="center">
							<h4>{{$array->Nombre}}</h4>
							@if ($array->imagen)
								<img  class='img-thumbnail' width="220" height="220" src="{{$array->imagen}}">		
							@else
								<img src="img/arreglos/sin-imagen.png" width="220" height="220" class='img-thumbnail'>
							@endif
						</div>

						<div class="col-md-4 col-sm-6" align="center">
							<h4>Codigo: {{$array->Codigo}}</h4>
								
							<table class="table table-striped">
								<thead>
									<tr >
										<th>Nombre</th>
										<th align="center">Cantidad</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($array->products as $producto)
										<tr>
											<td>{{$producto->NombreProducto }}</td>
											<td align="center">{{$producto->pivot->Cantidad }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>

						<div class="col-md-4 col-sm-12" align="center">
							<h4>Acciones</h4>
							<div class="margen-superior3 visible-lg visible-md"></div>
							<div class="row">								
								<div class="col-lg-12 col-md-12 col-sm-6">
									<div class="form-group">
										<a href="{{url('/Array/'.$array->id.'/edit')}}" class="btn btn-default btn-block">Editar</a> 
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-6">
									@include('ArrayCRUD.delete',['array'=> $array])
								</div>
							</div>
						</div>
					</div>
					<hr>
				@endforeach
				{{ $arrays->render()}}
		</div>
	</div>
</div>

@endsection