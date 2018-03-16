{!! Form::open(['url' => $url,'method' => $method ]) !!}

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12"><br>
					{{Form::label('Producto', 'Nombre del Producto')}}
				</div>
				<div class="col-sm-9 col-xs-12" ><br>
					{{ Form::text('NombreProducto', $product->NombreProducto,['class'=>'form-control','placeholder'=>'Nombre del producto'])}}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12"><br>
					{{Form::label('Catedoria_id', 'Categoria')}}
				</div>
				<div class="col-sm-9 col-xs-12"><br>
					{{ Form::select('category_id', $categorias, $product->category_id, ['class'=>'form-control']) }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12"><br>
					{{Form::label('Cantidad', 'Cantidad')}}
				</div>
				<div class="col-sm-9 col-xs-12"><br>
					{{ Form::text('Cantidad', $product->Cantidad,['class'=>'form-control','placeholder'=>'Cantidad'])}}
				</div>
			</div>
		</div>

		{{ Form::hidden('merma', 0) }}
	
		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12"><br>
					{{Form::label('precio', 'Precio')}}
				</div>
				<div class="col-sm-9 col-xs-12"><br>
					{{ Form::text('precio', $product->precio,['class'=>'form-control','placeholder'=>'merma'])}}
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2">
			<br>
				<div class="form-group text-right">
					{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
				</div>
			</div>
		</div>
{!! Form::close() !!}