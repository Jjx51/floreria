@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

@endsection


@section('content')
	<div class="container">
		<h1>Seleccionar productos manualmente</h1>
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
				                	<a class="example-image-link" href="{{ asset('img/full/dalia.jpeg') }}" data-lightbox="example1">
				                		<img class="example-image" src="{{ asset('img/full/dalia.jpeg') }}" alt="image" height="30px" width="40px" />
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
				                	<a class="example-image-link" href="{{ asset('img/full/ramo.jpeg') }}" data-lightbox="example2">
				                		<img class="example-image" src="{{ asset('img/full/ramo.jpeg') }}" alt="image" height="30px" width="40px" />
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
				                	<a class="example-image-link" href="{{ asset('img/full/lilia.jpeg') }}" data-lightbox="example3">
				                		<img class="example-image" src="{{ asset('img/full/lilia.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>53</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Ramo Rosas</td>
			                <td>Producto Individual</td>
			                <td>42</td>
			                <td>#6kd68h</td>
			                <td>
			                	<div>
				                	<a class="example-image-link" href="{{ asset('img/full/ramo2.jpeg') }}" data-lightbox="example4">
				                		<img class="example-image" src="{{ asset('img/full/ramo2.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>45</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Margaritas Blancas</td>
			                <td>Producto Individual</td>
			                <td>12</td>
			                <td>#62hds7</td>
			                <td>
			               		<div>
				                	<a class="example-image-link" href="{{ asset('img/full/margaritas_blancas.jpeg') }}" data-lightbox="example5">
				                		<img class="example-image" src="{{ asset('img/full/margaritas_blancas.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>63</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Ramo 3</td>
			                <td>Producto Individual</td>
			                <td>93</td>
			                <td>#7dis23</td>
			                <td>
			                	<div>
				                	<a class="example-image-link" href="{{ asset('img/full/ramo3.jpeg') }}" data-lightbox="example6">
				                		<img class="example-image" src="{{ asset('img/full/ramo3.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>0</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Ramo 4</td>
			                <td>Producto Individual</td>
			                <td>209</td>
			                <td>#thwy65</td>
			                <td>
			                	<div>
				                	<a class="example-image-link" href="{{ asset('img/full/ramo4.jpeg') }}" data-lightbox="example7">
				                		<img class="example-image" src="{{ asset('img/full/ramo4.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>72</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Rosa Azul</td>
			                <td>Producto Individual</td>
			                <td>0</td>
			                <td>#ydt57</td>
			                <td>
								<div>
				                	<a class="example-image-link" href="{{ asset('img/full/rosa_azul.jpeg') }}" data-lightbox="example8">
				                		<img class="example-image" src="{{ asset('img/full/rosa_azul.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>32</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Ramo 5</td>
			                <td>Producto Individual</td>
			                <td>72</td>
			                <td>#ydt57</td>
			                <td>
								<div>
				                	<a class="example-image-link" href="{{ asset('img/full/ramo5.jpeg') }}" data-lightbox="example9">
				                		<img class="example-image" src="{{ asset('img/full/ramo5.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>92</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Rosa Rosa</td>
			                <td>Producto Individual</td>
			                <td>24</td>
			                <td>#ydt57</td>
			                <td>
								<div>
				                	<a class="example-image-link" href="{{ asset('img/full/rosa_rosa.jpeg') }}" data-lightbox="example10">
				                		<img class="example-image" src="{{ asset('img/full/rosa_rosa.jpeg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>52</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Ramo</td>
			                <td>Producto Individual</td>
			                <td>78</td>
			                <td>#ydt57</td>
			                <td>
								<div>
				                	<a class="example-image-link" href="{{ asset('img/full/ramo1.jpg') }}" data-lightbox="example11">
				                		<img class="example-image" src="{{ asset('img/full/ramo1.jpg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			       		<tr>
			        		<td>91</td>
			        		<td><button type="button" class="btn btn-default">+</button></td>
			                <td>Margarita</td>
			                <td>Producto Individual</td>
			                <td>9</td>
			                <td>#ydt57</td>
			                <td>
								<div>
				                	<a class="example-image-link" href="{{ asset('img/full/Margarita.jpg') }}" data-lightbox="example12">
				                		<img class="example-image" src="{{ asset('img/full/Margarita.jpg') }}" alt="image" height="30px" width="40px" />
				                	</a>
				                </div>
			                </td>
			        	</tr>

			        </tbody>
			    </table>
			</div>
  		</div>
  		<div class="row margen-superior margen-inferior">
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
		 
	<script>$(document).ready(function() {
    	$('#example').DataTable();
		} );
     </script>
    <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
@endsection