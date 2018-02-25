@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 ">
            <a type="button" class="btn btn-default btn-lg btn-block letra150" href="#"><h3>Venta en el Mostrador</h3> </a>
        </div>
        
    </div>

    <div class="row">
        <br>
        @include('partials.alerts.general')
    </div>

    
    
    <div class="row">
        <form>
            <div class="form-group">
                <label for="inputcodigo" class="col-lg-1 col-md-1 col-sm-1 control-label text-center letra150 margen-superior2 margen-derecho margen-izquierdo">Código</label>

                <div class="col-lg-9 col-md-9 col-sm-7 col-lg-offset-0 col-md-offset-0 col-sm-offset-1 margen-superior2">
                    <input type="text" id="inputcodigo" class="form-control" placeholder="Ingresa aquí el código">
                </div> 

                <div class="col-lg-1 col-md-1 col-sm-1">
                    <button type="submit" class="btn btn-default margen-izquierdo margen-superior2 text-center">Agregar</button>
                </div>   
                
            </div>
        </form>
    </div>

    <div class="row margen-superior">
        <div class="col-lg-4 col-md-4 col-sm-4 margen-superior2">
            <button onclick="Venta()" type="button" class="btn btn-default btn-lg btn-block">Venta</button>
        </div> 
                
        <div class="col-lg-4 col-md-4 col-sm-4 margen-superior2">
            <button onclick="Pedido()" type="button" class="btn btn-default btn-lg btn-block">Pedido</button>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 margen-superior2">
            <button onclick="Mostrador()" type="button" class="btn btn-default btn-lg btn-block">Mostrador</button>
        </div>
    </div>

    <div id="cambia-contenido">
            
    </div>
    
</div>
@endsection

@section('javascript')
<!--funciones para los botones de venta mostrador y pedido -->
    <script type="text/javascript" src="{{ asset('js/home.js') }} "></script> 
@endsection
