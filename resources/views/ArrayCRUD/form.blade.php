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
				{{ Form::file('imagen',['class'=>'form-control','aling'=>'center','placeholder'=>'Codigo'])}}
			</div><br><br>
		</div>
        <br><hr>            
    
<div class="form-group"><br><hr>

		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $bases->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($bases as $base )
					<lavel>
						{{ Form::selectRange('Cantidad['.$base->id.']', 0, 24)}};
						{{ Form::checkbox('bases[]', $base->id ) }}  {{ $base->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $papels->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($papels as $papel )
					<lavel>
						{{ Form::selectRange('Cantidad['.$papel->id.']', 0, 24)}};
						{{ Form::checkbox('papels[]', $papel->id ) }}  {{ $papel->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $listones->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($listones as $listone )
					<lavel>
						{{ Form::selectRange('Cantidad['.$listone->id.']', 0, 24)}};
						{{ Form::checkbox('listones[]', $listone->id ) }}  {{ $listone->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $extras->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($extras as $extra )
					<lavel>
						{{ Form::selectRange('Cantidad['.$extra->id.']', 0, 24)}};
						{{ Form::checkbox('extras[]', $extra->id ) }}  {{ $extra->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $rollos->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($rollos as $rollo )
					<lavel>
						{{ Form::selectRange('Cantidad['.$rollo->id.']', 0, 24)}};
						{{ Form::checkbox('rollos[]', $rollo->id ) }}  {{ $rollo->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
		</div>


		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $tallos->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($tallos as $tallo )
					<lavel>
						{{ Form::selectRange('Cantidad['.$tallo->id.']', 0, 24)}};
						{{ Form::checkbox('tallos[]', $tallo->id ) }}  {{ $tallo->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
		</div>

		<div class="col-sm-3 col-sm-offset-1 panel panel-default">
			<div class="panel-heading">
				<h3 aling="center">{{ $flores->first()->category->name }}</h3>
			</div>
			<div class="panel-body form-group" align="left">
				@foreach ($flores as $flore )
					<lavel>
						{{ Form::selectRange('Cantidad['.$flore->id.']', 0, 24)}};
						{{ Form::checkbox('flores[]', $flore->id ) }}  {{ $flore->NombreProducto }}  		
					</lavel><hr>
				@endforeach
			</div>
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