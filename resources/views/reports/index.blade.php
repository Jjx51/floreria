@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">

@endsection


@section('content')

<div class="container">
	<div class="text-center">
		<h1>Registro de Merma</h1>
	</div>

	<p class="text-justify">Porfavor seleccione que tipo de reporte desea ver , posteriormente seleccione el periodo del reporte.<br>
		<b>Atención:</b>No seleccione un periodo de tiempo no valido como fechas antes del comienzo del proyecto o una fecha despues de la actual.
	</p>
	<br>

	@include('partials.alert')
    @include('partials.errors')

	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-10  col-sm-offset-1 col-xs-10 col-xs-offset-1 color-tabla">
    		<div class="text-center margen-superior">
	    		<form class="form-inline">
					<div class="col-md-4">
						<div class="form-group">
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="merma">
							    Reporte Mema
							  </label>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">					
							<div class="radio">
								  <label>
								    <input type="radio" name="optionsRadios" id="optionsRadios2" value="venta">
								    Reporte Venta
								  </label>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="radio">
								  <label>
								    <input type="radio" name="optionsRadios" id="optionsRadios3" value="ambos">
								    Ambos
								  </label>
							</div>
						</div>
					</div>					  							
				</form>
			</div>
	  	</div>		
  	</div>

    <div class="row text-center margen-inferior margen-superior">				
	    <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-10 col-xs-offset-1 margen-inferior2">
	        <button  type="button" class="btn btn-default btn-lg btn-block">Generar Reporte</button>
	    </div>
	    <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
	        <button  type="button" class="btn btn-default btn-lg btn-block">Cancelar</button>
	    </div>
	</div>

</div>

@endsection

@section('javascript')

@endsection