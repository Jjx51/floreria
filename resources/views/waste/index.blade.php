@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')

	<div class="container">
		<div class="text-center">
			<h1>Registro de Merma</h1>
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
		        <button  type="button" class="btn btn-default btn-lg btn-block margen-superior2">Añadir</button>
		    </div>
		    <div class="col-sm-4">
		        <button  type="button" class="btn btn-default btn-lg btn-block margen-superior2">Cancelar</button>
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