@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

	<div class="container">
		<div class="text-center">
			<h1>Merma</h1>
		</div>	
  		<div class="row color-tabla">
  			<div class="table-responsive color-tabla margen-superior">
			  	<table id="example" class="table table-striped table-bordered text-center" cellspacing="0">
			        <thead >
			            <tr >
                            <th class="text-center">Añadir Cantidad</th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Descripcion</th>
                            <th class="text-center">Exstencia</th>
			            </tr>
			        </thead>
			        <tbody>
			       		<tr>
                            <td>21</td>    
			                <td>Dalia</td>
			                <td>Producto Individual</td>
			                <td>21</td>
			        	</tr>
                        <tr>
                            <td>35</td>    
			                <td>Girasol</td>
			                <td>Producto Individual</td>
			                <td>36</td>
			        	</tr>
			        	<tr>
                            <td>1</td>    
			                <td>Margarita</td>
			                <td>Producto Individual</td>
			                <td>16</td>
			        	</tr>
			        	<tr>
                            <td>12</td>    
			                <td>Orquídea</td>
			                <td>Producto Individual</td>
			                <td>43</td>
			        	</tr>
			        	<tr>
                            <td>2</td>    
			                <td>Tulipán</td>
			                <td>Producto Individual</td>
			                <td>2</td>
			        	</tr>
			        	<tr>
                            <td>24</td>    
			                <td>Rosas</td>
			                <td>Producto Individual</td>
			                <td>121</td>
			        	</tr>
			        	<tr>
                            <td>5</td>    
			                <td>Noche buena</td>
			                <td>Producto Individual</td>
			                <td>6</td>
			        	</tr>
			        	<tr>
                            <td>1</td>    
			                <td>Jazmín</td>
			                <td>Producto Individual</td>
			                <td>16</td>
			        	</tr>
			        	<tr>
                            <td>2</td>    
			                <td>Lirios</td>
			                <td>Producto Individual</td>
			                <td>4</td>
			        	</tr>
			        	<tr>
                            <td>23</td>    
			                <td>Claveles</td>
			                <td>Producto Individual</td>
			                <td>28</td>
			        	</tr>
			        	<tr>
                            <td>4</td>    
			                <td>Narcisos</td>
			                <td>Producto Individual</td>
			                <td>12</td>
			        	</tr>
			        </tbody>
			    </table>
			</div>
  		</div>
  		
        <div class="row margen-inferior margen-superior">				
		    <div class="col-sm-offset-2 col-sm-4">
		        <button  type="button" class="btn btn-default btn-lg btn-block">Añadir</button>
		    </div>
		    <div class="col-sm-4">
		        <button  type="button" class="btn btn-default btn-lg btn-block">Cancelar</button>
		    </div>
		</div>
  	</div>

@endsection

@section('javascript')
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
        $('#example').dataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                }
            } );
        } );
    </script>
	<script>
		$(document).ready(function() {
    	$('#example').DataTable();
		} );
     </script>
@endsection