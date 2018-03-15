@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


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
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading text-center lead"><strong>Crear nuevo arreglo de flores</strong></div>
                        <div class="panel-body">
                            <p align="center">Proporcione los siguientes datos para añadir un nuevo arreglo en la base de datos.Posteriormente
                            agregue los productos que componen al arreglo</p>
                           
                           @include('ArrayCRUD.form',[
                                'array'=>$array,  
                                'categorias' =>$categorias,                    
                                'url' => '/Array', 
                                'method' => 'POST',
                                'before' => 'csrf'])
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection