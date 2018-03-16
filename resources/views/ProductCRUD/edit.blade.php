@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center lead"><strong>Edición de producto</strong></div>
                    <div class="panel-body">                       
                       @include('ProductCRUD.form',['product'=>$product, 'url' => '/Product/'.$product->id, 'method' => 'PUT','before' => 'csrf'])
                       
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	


@endsection