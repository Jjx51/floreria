@extends('layouts.app')


@section('content')
	<div class="container">
		<h1 class="text-center">Editar Categoria</h1>
	</div>

	<div class="container">
		<div class="row">

	@include('CategoryProduct.form',['CategoyProduct'=>$CategoryProduct, 'url' => '/Categoryp/'.$CategoryProduct->id, 'method' => 'PUT','before' => 'csrf'])

		</div>
	</div>
	


@endsection