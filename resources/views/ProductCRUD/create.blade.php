@extends('layouts.app')


@section('content')
	<div class="container">
		<h1 class="text-center">Nuevo Producto</h1>
	</div>

	<div class="container">
		<div class="row">

			@include('ProductCRUD.form',['product'=>$product, 'categorias'=>$categorias, 'url' => '/Product', 'method' => 'POST','before' => 'csrf'])

		</div>
	</div>
	


@endsection
