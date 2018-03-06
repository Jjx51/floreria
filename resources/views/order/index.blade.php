@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')
	<div class="container">
		<h1 class="text-center">Arreglos pendientes</h1>
	</div>

	@include('partials.alert')
    @include('partials.errors')

    <div class="container borde-especial margen-inferior">
    	
  		<div class="row margen-superior">
  			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " >
			    <label class="margen-izquierdo letra20" >Arreglo: Flores de verano</label>
            </div>

			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 " >
			    <label class="margen-izquierdo letra20" >Descripción</label>
            </div>
		</div>

		<div class="row">
            <div class="col-md-5 col-lg-4 col-xs-6 margen-superior">
			    <img src="{{ asset('img\ejemplo.jpeg')}} " width="95%"  alt="" class="img-rounded img-responsive center-block img-florista">
            </div>

			<div class="col-md-7 col-lg-8 col-xs-6 margen-superior letra20">
				<textarea class="form-control" rows="9"></textarea>
            </div>
        </div>

        <form>
	        <div class="row">
	            <div class="col-md-6">
					<div class="form-group">
						<label class="margen-izquierdo letra20" id="nota">Nota</label>
						<textarea class="form-control" rows="2"></textarea>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="margen-izquierdo letra20" id="mensaje">Mensaje para la tarjeta </label>
						<textarea class="form-control" rows="2"></textarea>
					</div>
				</div>
	            
	        </div>

        <div class="row">
            <div class="col-md-6 col-xs-12">
        		<div class="form-group">
				    <label class="margen-izquierdo letra20" id="terminados">Arreglos terminados:</label>
				    <input type="text" name="terminado" value="5"  class="text-center colorb">
		        </div>
		    </div>
			<div class="col-md-6 col-xs-12">
			    <div class="form-group">
					<label class="margen-izquierdo letra20" id="pendientes">Arreglos pendientes:</label>
				    <input type="text" name="pendiente" value="0"  class="text-center colorb">
				</div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
			    <div class="form-group">
				    <label class="margen-izquierdo letra20" id="personal">Seleccionar personal</label>
				    <select name="opciones" >
                            <option selected="true" disabled="disabled">seleccione encargardo</option>
 			                <option value="1">Ana López</option>
 			                <option value="2">Luis Morales</option>
 			                <option value="3">Antonio Torres</option>
 	                </select>
				</div>
            </div>
        </div>

        <div class="row margen-inferior">
				    <div class="col-md-3 col-sm-6 text-center margen-superior">
				    <button type="button" class="btn btn-default btn-lg btn-block">Listo Para Entrega</button>
				    </div> 
				    <div class="col-md-3 col-sm-6 text-center margen-superior">
				    <button type="button" class="btn btn-default btn-lg btn-block ">Mardar a Almacen</button>
				    </div>
				    <div class="col-md-3 col-sm-6 text-center margen-superior">
				    <button type="button" class="btn btn-default btn-lg btn-block">Mandar a Mostrador</button>
				    </div>	
				    <div class="col-md-3 col-sm-6 text-center margen-superior">
				    <button type="button" class="btn btn-default btn-lg btn-block">Cancelar</button>
				    </div>			
		</div>
        </form>				
    </div>
    


@endsection

@section('javascript')

@endsection