@extends('layouts.app')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/misestilos.css') }}">

	
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
	                    <div class="panel-heading text-center lead"><strong>Editar categoría</strong></div>
	                    <div class="panel-body">
	                       @include('CategoryProduct.form',['CategoyProduct'=>$CategoryProduct, 'url' => '/Categoryp/'.$CategoryProduct->id, 'method' => 'PUT','before' => 'csrf'])
	                       
	                    </div>
	            </div>
        	</div>
		</div>
	</div>
	


@endsection