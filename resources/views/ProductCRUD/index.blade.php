@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection


@section('content')


	<div class="container">
		<h1 class="text-center">Lista de Productos</h1>
	</div>
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
			@include('partials.alert')
			@include('partials.errors')
        </div>
	</div>
</div>
	<div class="row row margen-superior margen-inferior">
  			<div class="col-sm-offset-4 col-sm-4">
			  	<a href="{{ route('Product.create') }}" class="btn btn-success btn-lg btn-block">Nueva Producto</a>
		    </div>
	<div class="container">
		<div class="row row margen-superior margen-inferior">
	  			<div class="col-sm-offset-4 col-sm-4 col-xs-offset-1 col-xs-10">
				  	<a href="{{ route('Product.create') }}" class="btn btn-success btn-lg btn-block">Nuevo Producto</a>
			    </div>
		</div>
	</div>
	
	<!--ADASDASDASD-->
	<div class="container">
  		<div class="row">
  			<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 ">
	  			<div class="table-responsive color-tabla margen-superior">
				  	<table id="example" class="table table-striped text-center " cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th class="text-center">N°</th>
				                <th class="text-center">Nombre</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Cantidad</th>
								<th class="text-center">Merma</th>
								<th class="text-center">Precio</th>
				                <th class="text-center">Acción 1</th>
								<th class="text-center">Acción 2</th>
				            </tr>
				        </thead>
				        <tbody>
							@foreach ($products as $product)
								<tr>
									<td> {{ $product->id }} </td>
									<td> {{ $product->NombreProducto }}  </td>
									<td> {{ $product->Category->name }}  </td>
									<td> {{ $product->Cantidad }}  </td>
									<td> {{ $product->merma }}  </td>
									<td> {{ $product->precio }}  </td>
									<td>
										<div class="form-group" align="center">
									 		<a href="{{url('/Product/'.$product->id.'/edit')}}" class="btn btn-primary">Editar</a> 
									 	</div>
									</td>
									 <td align="center">
										@include('ProductCRUD.delete',['product'=> $product])
									</td>
								</tr>
							@endforeach 	
				        </tbody>
				    </table>
				</div>
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