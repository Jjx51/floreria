@extends('layouts.app')


@section('content')
	<div class="container">
		<h1 class="text-center">Nueva Categoria</h1>
	</div>

	<div class="container">
		<div class="row">

			@include('CategoryProduct.form',['CategoyProduct'=>$CategoryProduct, 'url' => '/Categoryp', 'method' => 'POST','before' => 'csrf'])

		</div>
	</div>
	


@endsection
