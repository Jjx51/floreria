   
{!! Form::open(['url' => $url,'method' => $method, 'files'=>true ]) !!}
		
		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12 col-lg-offset-1 col-md-5"><br>
					{{Form::label('Nombre', 'Nombre del arreglo')}}
				</div>
				<div class="col-sm-8 col-xs-12 col-lg-4 col-md-5" ><br>
					{{ Form::text('Nombre', $array->Nombre,['class'=>'form-control','placeholder'=>'Nombre del arreglo...'])}}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12 col-lg-offset-1 col-md-5 "><br>
					{{Form::label('Codigo', 'Código')}}
				</div>
				<div class="col-sm-8 col-xs-12 col-lg-4 col-md-5"><br>
					{{ Form::text('Codigo', $array->Codigo,['class'=>'form-control','placeholder'=>'Código'])}}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12 col-lg-offset-1 col-md-5 "><br>
					{{Form::label('Precio', 'Precio')}}
				</div>
				<div class="col-sm-8 col-xs-12 col-lg-4 col-md-5"><br>
					{{ Form::number('precio', $array->precio,['class'=>'form-control','placeholder'=>'Precio'])}}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12 col-lg-offset-1 col-md-5"><br>
					{{Form::label('img', 'Imagen')}}
				</div>
				<div class="col-sm-8 col-xs-12 col-lg-4 col-md-5"><br>
					{{ Form::file('imagen',['class'=>'form-control margen-inferior2','aling'=>'center'])}}
				</div><br><br>
			</div>
		</div>
        <br>       
    
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-1">
		<br>
			<div class="form-group text-right">
				{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
			</div>
		</div>
	</div>
	
	<!--Separación-->
		<div class="form-group"><br><hr>
			@foreach ($categorias as $categoria)
				<div class="panel-group">
					<div class="panel panel-default col-sm-10 col-sm-offset-1 panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#{{$categoria->name}}" class="text-center"><h4>{{$categoria->name}}</h4></a>
							</h4>
						</div>
						<div id="{{$categoria->name}}" class="panel-collapse collapse">
							<!--PARTE QUE ME INTERESA-->
							<div class="panel-body">
								<div class="row">
									@foreach ($categoria->Products as $producto )
										<div class="col-lg-4 col-md-6">
											{{ Form::selectRange('Cantidad['.$producto->id.']', 0, 24)}}
											<label>
												
												{{ Form::checkbox('productos[]', $producto->id ) }}  {{ $producto->NombreProducto }}  		
											</label>
										</div>
										
									@endforeach		
								</div>	
							</div>
							<!--/PARTE QUE ME INTERESA-->
						</div>
					</div>
				</div>

			@endforeach
		</div>

{!! Form::close() !!}