@extends('layouts.app')


@section('content')
	<div class="container">
		<h1 class="text-center">Editar Categoria</h1>
	</div>

	<div class="container">
		<div class="row">
	@include('ProductCRUD.form',['product'=>$product, 'url' => '/Product/'.$product->id, 'method' => 'PUT','before' => 'csrf'])

		</div>
	</div>
	


@endsection