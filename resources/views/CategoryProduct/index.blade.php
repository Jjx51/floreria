@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection


@section('content')
	<div class="container">
		<h1 class="text-center">Lista de Categorias</h1>
	</div>
	<div class="row row margen-superior margen-inferior">
  			<div class="col-sm-offset-4 col-sm-4">
			  	<a href="{{ route('Categoryp.create') }}" class="btn btn-success btn-lg btn-block">Nueva Categoria</a>
		    </div>
	</div>
	<div class="container">
  		<div class="row ">
  			<div class="table-responsive color-tabla margen-superior">
			  	<table id="example" class="table table-striped  text-center " cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th class="text-center">N°</th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center" COLSPAN="2">Acciones</th>
			            </tr>
			        </thead>
			        <tbody>
						
						@foreach ($categorias as $categoria)
							<tr>
								<td><a href="{{url('/Categoryp/'.$categoria->id)}}"> {{ $categoria->id }} </a> </td>
								<td><a href="{{url('/Categoryp/'.$categoria->id)}}"> {{ $categoria->name }} </a> </td>
								<td>
								<div class="form-group" align="right">
								 <a href="{{url('/Categoryp/'.$categoria->id.'/edit',['id'=>$categoria->id])}}" class="btn btn-primary">Editar</a> 
								 </div>
								 <td align="left">
								@include('CategoryProduct.delete',['categoria'=> $categoria])
								</td>
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