   


{!! Form::open(['url' => $url,'method' => $method, 'files'=>true ]) !!}

		<div class="form-group" align="center">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('Nombre', 'Nombre del arreglo')}}
			</div>
			<div class="col-sm-9 col-xs-12" ><br>
				{{ Form::text('Nombre', $array->Nombre,['class'=>'form-control','placeholder'=>'Nombre del arreglo...'])}}
			</div>
		</div>

		<div class="form-group" align="center">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('Codigo', 'Codigo')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::text('Codigo', $array->Codigo,['class'=>'form-control','placeholder'=>'Codigo'])}}
			</div>
		</div>

		<div class="form-group" align="center">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('Precio', 'Precio')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::text('precio', $array->precio,['class'=>'form-control','placeholder'=>'Precio'])}}
			</div>
		</div>

		<div class="form-group" align="center">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('img', 'Imagen')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::file('imagen',['class'=>'form-control','aling'=>'center','placeholder'=>'Codigo'])}}
			</div><br><br>
		</div>
        <br><hr>            
    
	<div class="form-group">
			<div class="col-sm-12">
			<br>
				<div class="form-group text-right">
					{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
				</div>
			</div>
		</div>
	

		<div class="form-group"><br><hr>
			@foreach ($categorias as $categoria)
				<div class="panel-group">
					<div class="panel panel-default col-sm-8 col-sm-offset-2 panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" href="#{{$categoria->name}}"><h3 aling-text="center">{{$categoria->name}}</h3></a>
							</h3>
						</div>
						<div id="{{$categoria->name}}" class="panel-collapse collapse">
							<div class="panel-body">

								@foreach ($categoria->Products as $producto )
									<lavel>
										{{ Form::selectRange('Cantidad['.$producto->id.']', 0, 24)}};
										{{ Form::checkbox('productos[]', $producto->id ) }}  {{ $producto->NombreProducto }}  		
									</lavel><hr>
								@endforeach			
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>

{!! Form::close() !!}