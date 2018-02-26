@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection


@section('content')
	<div class="container">
		<h1 class="text-center">Productos de la Categoria : {{ $nombre }}</h1>
	</div>
	<div class="container">
  		<div class="row ">
  			<div class="table-responsive color-tabla margen-superior">
			  	<table id="example" class="table table-striped  text-center " cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th class="text-center">N°</th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Cantidad</th>
							<th class="text-center">Merma</th>
			            </tr>
			        </thead>
			        <tbody>
						
						@foreach ($productos as $producto)
							<tr>
								<td> {{ $producto->id }}  </td>
								<td> {{ $producto->NombreProducto }} </td>
								<td> {{ $producto->Cantidad }}  </td>
								<td> {{ $producto->merma }} </td>
							</tr>
						@endforeach
							
			        	
			        </tbody>
			    </table>
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

    <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>


@endsection