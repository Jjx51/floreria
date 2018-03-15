{!! Form::open(['url'=> '/ArrayProduct/'.$arrayproduct->id, 'method'=> 'DELETE','class'=>'form-group ','before' => 'csrf']) !!}

	<input type="submit" value="Eliminar" class="btn btn-default btn-block">

{!! Form::close() !!}