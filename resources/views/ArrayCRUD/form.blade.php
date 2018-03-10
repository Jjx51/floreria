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
				{{Form::label('img', 'Imagen')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::file('imagen')}}
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-12">
			<br>
				<div class="form-group text-right">
					{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
				</div>
			</div>
		</div>
{!! Form::close() !!}