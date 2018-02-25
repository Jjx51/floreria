@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection


@section('content')
	<div class="container">
		<h1 class="text-center">Seleccionar productos manualmente</h1>
	</div>

	<div class="container">
  		<div class="row ">
  			<div class="table-responsive color-tabla margen-superior">
			  	<table id="example" class="table table-striped table-bordered text-center " cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th class="text-center">Añadir</th>
			                <th class="text-center"></th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Descripcion</th>
			                <th class="text-center">Exstencia</th>
			                <th class="text-center">Codigo</th>
			                <th class="text-center">Imagen</th>
			            </tr>
			        </thead>
			        <tbody>
			       		<tr>
			        		<td>21</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Dalia</td>
			                <td>Producto Individual</td>
			                <td>21</td>
			                <td>#ydt57</td>
			                <td>
			                	<div>
				                	<a class="example-image-link" href="{{ asset('img/full/dalia.jpg') }}" data-lightbox="example1">
				                		<img class="example-image" src="{{ asset('img/full/dalia.jpg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>78</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Ramo 1</td>
			                <td>Producto Conjunto</td>
			                <td>0</td>
			                <td>#73hdi</td>
			                <td>

			                	<div>
				                	<a class="example-image-link" href="{{ asset('img/full/ramo.jpg') }}" data-lightbox="example2">
				                		<img class="example-image" src="{{ asset('img/full/ramo.jpg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>59</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Lilia</td>
			                <td>Producto Individual</td>
			                <td>21</td>
			                <td>#83636</td>
			                <td>
			                	<div>
				                	<a class="example-image-link" href="{{ asset('img/full/lilia.jpg') }}" data-lightbox="example3">
				                		<img class="example-image" src="{{ asset('img/full/lilia.jpg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>
			        	
			        </tbody>
			    </table>
			</div>
  		</div>
  		<div class="row row margen-superior margen-inferior">
  			<div class="col-sm-offset-4 col-sm-4">
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

    <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>


@endsection