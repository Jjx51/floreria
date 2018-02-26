{!! Form::open(['url' => $url,'method' => $method]) !!}
  	 
		<div class="form-group">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('Producto', 'Nombre del Producto')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::text('NombreProducto', $product->NombreProducto,['class'=>'form-control','placeholder'=>'Nombre delproducto...'])}}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('Catedoria_id', 'categoria_id')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::select('category_id', $categorias, $product->category_id, ['class'=>'form-control']) }}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('Cantidad', 'Cantidad')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::text('Cantidad', $product->Cantidad,['class'=>'form-control','placeholder'=>'Cantidad'])}}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-3 col-xs-12"><br>
				{{Form::label('merma', 'merma')}}
			</div>
			<div class="col-sm-9 col-xs-12"><br>
				{{ Form::text('merma', $product->merma,['class'=>'form-control','placeholder'=>'merma'])}}
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