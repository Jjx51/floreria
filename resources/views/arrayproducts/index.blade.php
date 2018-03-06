@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')
	<div class="container">
		<h1>Inventario</h1>
	</div>
	@include('partials.alert')
    @include('partials.errors')

@endsection

@section('javascript')


@endsection