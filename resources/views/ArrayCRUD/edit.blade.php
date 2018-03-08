@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

<div class="container">
	<h1 class="text-center">Editar Arreglo</h1>
	</div>

	<div class="container">
		<div class="row">
	@include('ArrayCRUD.form',['array'=>$array, 'url' => '/Array/'.$array->id, 'method' => 'PUT','before' => 'csrf'])

		</div>
	</div>

@endsection
