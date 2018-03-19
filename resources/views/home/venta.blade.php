<div class="text-center margen-superior margen-inferior">
	<h3>{{ $arreglo->Nombre }}</h3>
	
</div>

{!! Form::open(['url'=> 'florista/Venta', 'method'=> 'POST','class'=>'form-group ','before' => 'csrf']) !!}
<div class="borde margen-inferior pedido-home">
	<div class="row margen-inferior margen-superior">
		<div class="col-lg-12 col-md-12 col-sm-12 margen-superior">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<img src="{{ $arreglo->imagen }}" width="220" height="220" alt="" class="img-rounded img-responsive imagen-home">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8">
				<p>Descripcion</p>
				<table class="table table-striped">
					<thead>
						<tr >
							<th>Nombre</th>
							<th align="center">Cantidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($arreglo->products as $producto)
							<tr>
								<td>{{$producto->NombreProducto }}</td>
								<td align="center">{{$producto->pivot->Cantidad }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
					{{Form::label('Cantidadl', 'Cantidad')}}
					{{Form::text('cantidad', null, ['class'=>'form-control','placeholder'=>'Cantidad de arreglos'])}}
					{{Form::label('personl', 'Seleccionar personal')}}
					{{Form::select('user_id', $usuarios, ['class'=>'form-control']) }}
					{{Form::hidden('array_id',$arreglo->id)}}
			</div>


		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 margen-inferior">

			<div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
				<a href="{{ route('inicio') }}" type="button" class="btn btn-default btn-block margen-inferior">Cancelar</a>
		    </div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 ">
				<div>
					<input type="submit" value="Agregar" class="btn btn-default btn-block margen-inferior">
				</div>
			</div>

		</div>	
	</div>

</div>
{!! Form::close() !!}