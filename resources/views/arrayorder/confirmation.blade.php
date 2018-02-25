@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')
	<div class="container">
		<h1 class="text-center">Confirmación</h1>
		<p>Estos son los productos que han sido seleccionados. Verifique que son los que desea agregar y de click a "Confirmar venta"</p>
	</div>


	<div class="container">
  		<div class="row ">
  			<div class="table-responsive color-tabla margen-superior">
			  	<table id="example" class="table table-striped table-bordered text-center " cellspacing="0" >
			        <thead >
			            <tr >
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Cantidad</th>
                            <th class="text-center">Existencia</th>
			            </tr>
			        </thead>
			        <tbody>
			       		<tr>    
			                <td>Dalia</td>
			                <td>21</td>
			                <td>21</td>
			        	</tr>
                        <tr>    
			                <td>Girasol</td>
			                <td>35</td>
			                <td>36</td>
			        	</tr>
			        	<tr>
                            <td>Margarita</td>
			                <td>1</td>
			                <td>16</td>
			        	</tr>
			        </tbody>
			    </table>
			</div>
  		</div>
        <div class="row">				
		    <div class="col-md-4 col-sm-4 col-md-offset-2  col-sm-offset-2 text-center margen-superior2"><button  type="button" class="btn btn-default btn-lg btn-block">Confirmar Venta </button></div> 
            <div class="col-md-4 col-sm-4 text-center margen-superior2"><button  type="button" class="btn btn-default btn-lg btn-block">Cancelar</button></div>
		</div>
  	</div>


@endsection

@section('javascript')


@endsection