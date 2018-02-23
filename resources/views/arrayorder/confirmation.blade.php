@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')
	<div class="container">
		<h1>Confirmación</h1>
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
			        	<tr>    
			                <td>Orquídea</td>
			                <td>12</td>
			                <td>43</td>
			        	</tr>
			        	<tr>
                            <td>Tulipán</td>
			                <td>2</td>
			                <td>2</td>
			        	</tr>
			        	<tr>    
			                <td>Rosas</td>
			                <td>24</td>
			                <td>121</td>
			        	</tr>
			        	<tr>
                            <td>Noche buena</td>
			                <td>5</td>
			                <td>6</td>
			        	</tr>
			        	<tr>
                                
			                <td>Jazmín</td>
			                <td>1</td>
			                <td>16</td>
			        	</tr>
			        	<tr>
                                
			                <td>Lirios</td>
			                <td>2</td>
			                <td>4</td>
			        	</tr>
			        	<tr>    
			                <td>Claveles</td>
			                <td>23</td>
			                <td>28</td>
			        	</tr>
			        	<tr>
                            <td>Narcisos</td>
			                <td>4</td>
			                <td>12</td>
			        	</tr>
			        </tbody>
			    </table>
			</div>
  		</div>
        <div class="row margen-inferior margen-superior">				
		    <div class="col-md-4 col-sm-4 col-md-offset-2  col-sm-offset-2 text-center margen-inferior"><button  type="button" class="btn btn-default btn-lg btn-block">Confirmar Venta </button></div> 
            <div class="col-md-4 col-sm-4 text-center "><button  type="button" class="btn btn-default btn-lg btn-block">Cancelar</button></div>
		</div>
  	</div>


@endsection

@section('javascript')


@endsection