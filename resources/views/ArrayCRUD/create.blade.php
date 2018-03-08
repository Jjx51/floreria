@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')


			

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default panel-centrado">
                    <div class="panel-heading text-center lead"><strong>Crear nuevo arreglo de flores</strong></div>
                    <div class="panel-body">
                       
                       @include('ArrayCRUD.form',['array'=>$array, 'url' => '/Array', 'method' => 'POST','before' => 'csrf'])
                       
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection