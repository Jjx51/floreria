{!! Form::open(['url' => $url,'method' => $method]) !!}
  	 
  	 <div class="row">
		<div class="form-group">
			<div class="col-sm-3 col-xs-12">
				{{Form::label('name', 'Nombre de la categoria')}}
			</div>
			<div class="col-sm-9 col-xs-12">
				{{ Form::text('name', $CategoryProduct->name,['class'=>'form-control','placeholder'=>'Nombre de la categoria...'])}}
			</div>
		</div>
	</div>

		<div class="row">
			<div class="form-group">
				<div class="col-lg-8 col-lg-offset-2">
				<br>
					<div class="form-group text-right">
						{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
					</div>
				</div>
			</div>
		</div>
{!! Form::close() !!}