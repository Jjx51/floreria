@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

	@include('partials.alert')
    @include('partials.errors')

@endsection

@section('javascript')

@endsection