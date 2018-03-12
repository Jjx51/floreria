{!! Form::open(['url'=> '/ArrayProduct/'.$arrayproduct->id, 'method'=> 'DELETE','class'=>'form-group ','before' => 'csrf']) !!}
<div>
		<input type="submit" value="Eliminar" class="btn btn-danger btn-block">
</div>
{!! Form::close() !!}