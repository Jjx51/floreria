@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection


@section('content')

	<div class="container">
		<h3 class="text-center">Bloque1</h3>
		<div class="row">
  			<div class="table-responsive color-tabla margen-superior">
				<table id="example" class="table table-striped table-bordered text-center">
			        <thead>
			            <tr>
			                <th class="text-center">#Folio</th>
			                <th class="text-center">Direccion</th>
			                <th class="text-center">Fecha</th>
			                <th class="text-center">Hora</th>
			                <th class="text-center">Destinatario</th>
			                <th class="text-center">Telefono</th>
			                <th class="text-center">Cliente</th>
			                <th class="text-center">Estado</th>
			                <th class="text-center">Hora de entrega</th>
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>#Folio</th>
			                <th>Direccion</th>
			                <th>Fecha</th>
			                <th>Hora</th>
			                <th>Destinatario</th>
			                <th>Telefono</th>
			                <th>Cliente</th>
			                <th>Estado</th>
			                <th>Hora de entrega</th>
			            </tr>
			        </tfoot>
			        <tbody>
			        	<tr>
			        		<td>#121</td>
			                <td>Av.15 Septiembre 8543 Col.Sn.Jacinto</td>
			                <td>12/09/2017</td>
			                <td>10:21</td>
			                <td>America Perez</td>
			                <td>2229087621</td>
			                <td>Alberto Ramirez</td>
			                <td>En ruta</td>
			                <td>--:--</td>
			        	</tr>
			        	<tr>
			        		<td>#122</td>
			                <td>Blvrd. 14 sur 6523 Col. El pedregal</td>
			                <td>12/09/2017</td>
			                <td>10:21</td>
			                <td>Julieta Estopier</td>
			                <td>2229087621</td>
			                <td>Jose Paredes</td>
			                <td>Entregado</td>
			                <td>13:45</td>
			        	</tr>
			            <tr class="danger">
			                <td>#123</td>
			                <td>Blvrd.16 Sur 6543 Col. Sn.Patagonio</td>
			                <td>12/09/2017</td>
			                <td>09:21</td>
			                <td>Jesus Gracia</td>
			                <td>2229087621</td>
			                <td>Jesica Jimenez</td>
			                <td><button type="button" class="btn btn btn-link " data-toggle="modal" data-target="#myModal">Entrega fallida</button></td>
			                <td>13:00</td>
			            </tr>			         			        			            
			        </tbody>
			    </table>
			</div>
  		</div>
  		
  		<!--BLOQUE 2-->
		<h3 class="text-center">Bloque 2</h3>
		<div class="row ">
  			<div class="table-responsive color-tabla margen-superior">
				<table id="example2" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th class="text-center">#Folio</th>
			                <th class="text-center">Direccion</th>
			                <th class="text-center">Fecha</th>
			                <th class="text-center">Hora</th>
			                <th class="text-center">Destinatario</th>
			                <th class="text-center">Telefono</th>
			                <th class="text-center">Cliente</th>
			                <th class="text-center">Estado</th>
			                <th class="text-center">Hora de entrega</th>
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>#Folio</th>
			                <th>Direccion</th>
			                <th>Fecha</th>
			                <th>Hora</th>
			                <th>Destinatario</th>
			                <th>Telefono</th>
			                <th>Cliente</th>
			                <th>Estado</th>
			                <th>Hora de entrega</th>
			            </tr>
			        </tfoot>
			        <tbody>
			        	<tr>
			        		<td>#121</td>
			                <td>Av.15 Septiembre 8543 Col.Sn.Jacinto</td>
			                <td>12/09/2017</td>
			                <td>10:21</td>
			                <td>America Perez</td>
			                <td>2229087621</td>
			                <td>Alberto Ramirez</td>
			                <td>En ruta</td>
			                <td>--:--</td>
			        	</tr>
			        	<tr>
			        		<td>#122</td>
			                <td>Blvrd. 14 sur 6523 Col. El pedregal</td>
			                <td>12/09/2017</td>
			                <td>10:21</td>
			                <td>Julieta Estopier</td>
			                <td>2229087621</td>
			                <td>Jose Paredes</td>
			                <td>Entregado</td>
			                <td>13:45</td>
			        	</tr>
			            <tr class="danger">
			                <td>#123</td>
			                <td>Blvrd.16 Sur 6543 Col. Sn.Patagonio</td>
			                <td>12/09/2017</td>
			                <td>09:21</td>
			                <td>Jesus Gracia</td>
			                <td>2229087621</td>
			                <td>Jesica Jimenez</td>
			                <td><button type="button" class="btn btn btn-link " data-toggle="modal" data-target="#myModal">Entrega fallida</button></td>
			                <td>13:00</td>
			            </tr>
			            
			        </tbody>
			    </table>
			</div>
  		</div>
		
		<!--BLOQUE 3-->
		<h3 class="text-center">Bloque 3</h3>
		<div class="row">
  			<div class="table-responsive color-tabla margen-superior">
				<table id="example3" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th class="text-center">#Folio</th>
			                <th class="text-center">Direccion</th>
			                <th class="text-center">Fecha</th>
			                <th class="text-center">Hora</th>
			                <th class="text-center">Destinatario</th>
			                <th class="text-center">Telefono</th>
			                <th class="text-center">Cliente</th>
			                <th class="text-center">Estado</th>
			                <th class="text-center">Hora de entrega</th>
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>#Folio</th>
			                <th>Direccion</th>
			                <th>Fecha</th>
			                <th>Hora</th>
			                <th>Destinatario</th>
			                <th>Telefono</th>
			                <th>Cliente</th>
			                <th>Estado</th>
			                <th>Hora de entrega</th>
			            </tr>
			        </tfoot>
			        <tbody>
			        	<tr>
			        		<td>#121</td>
			                <td>Av.15 Septiembre 8543 Col.Sn.Jacinto</td>
			                <td>12/09/2017</td>
			                <td>10:21</td>
			                <td>America Perez</td>
			                <td>2229087621</td>
			                <td>Alberto Ramirez</td>
			                <td>En ruta</td>
			                <td>--:--</td>
			        	</tr>
			        	<tr>
			        		<td>#122</td>
			                <td>Blvrd. 14 sur 6523 Col. El pedregal</td>
			                <td>12/09/2017</td>
			                <td>10:21</td>
			                <td>Julieta Estopier</td>
			                <td>2229087621</td>
			                <td>Jose Paredes</td>
			                <td>Entregado</td>
			                <td>13:45</td>
			        	</tr>
			            <tr class="danger">
			                <td>#123</td>
			                <td>Blvrd.16 Sur 6543 Col. Sn.Patagonio</td>
			                <td>12/09/2017</td>
			                <td>09:21</td>
			                <td>Jesus Gracia</td>
			                <td>2229087621</td>
			                <td>Jesica Jimenez</td>
			                <td><button type="button" class="btn btn btn-link " data-toggle="modal" data-target="#myModal">Entrega fallida</button></td>
			                <td>13:00</td>
			            </tr>			            
			        </tbody>
			    </table>
			</div>
  		</div>
  	</div>


		<div class="modal fade colorb" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Estado Actual del Pedido</h4>
			        </div>

			        <div class="modal-body">
			        	<div class="container">
			        		<div class="row">

					        	<div class="col-md-12">
					        		
					        		<form>
			  							<div class="form-group">
			  								<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
												    En Ruta
												</label>
											</div>

											<div class="radio">
												  <label>
												    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												    Entregado
												  </label>
											</div>
											<div class="radio">
												  <label>
												    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
												    Entrega Fallida
												  </label>
											</div>
			  							</div>

			  							<div class="col-md-6">
			  								<div class="form-group">
												<label for="InputNombre" style="font-size: 20px;">Nota</label>
												<textarea class="form-control" rows="3"></textarea>
							  				</div>
			  							</div>
			  							
			  						</form>
					        	</div>
			        		</div>
			        	</div>
			        </div>
			        <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				        <button type="button" class="btn btn-primary">Guardar</button>
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
		    $('#example').DataTable( {
		        "language": {
		            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
		        }
		    } );
		    $('#example2').DataTable( {
		        "language": {
		            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
		        } 
		    } );

		    $('#example3').DataTable( {
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

    <script>$(document).ready(function() {
    	$('#example2').DataTable();
		});
    </script>

    <script>$(document).ready(function() {
    	$('#example3').DataTable();
		});
    </script>

@endsection