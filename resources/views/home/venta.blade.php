<div class="text-center margen-superior margen-inferior">
	<h3>{{ $arreglo->Nombre }}</h3>
	
</div>

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
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 margen-inferior">

			<div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
				<a href="{{ route('inicio') }}" type="button" class="btn btn-default btn-block margen-inferior">Cancelar</a>
		    </div>
			

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 ">
			{!! Form::open(['url'=> '/Product/descontar/'. $arreglo->id, 'method'=> 'PUT','class'=>'form-group ','before' => 'csrf']) !!}
<div>


		<input type="submit" value="Agregar" class="btn btn-default btn-block margen-inferior">
</div>
{!! Form::close() !!}
			
				
			</div>
		</div>	
	</div>
</div>