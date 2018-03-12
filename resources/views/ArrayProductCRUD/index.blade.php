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
					<a href="{{ route('ArrayProduct.create') }}" class="btn btn-primary pull-right">Arreglo</a>
					</h2>
					<br>
				</div>

				<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>Arreglo</th>
							<th>Producto</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($arrayproducts as $arrayproduct)
							<tr>
								<td>{{$arrayproduct->id}}</td>
								<td>{{$arrayproduct->array_id}}</td>
								<td>{{$arrayproduct->product_id}}</td>
								<td>{{$arrayproduct->Cantidad}}</td>
							</tr>						
							
						@endforeach
					</tbody>
				</table>
					
					{{ $arrayproducts->render()}}
				</div>
		</div>
	</div>
</div>


	

@endsection