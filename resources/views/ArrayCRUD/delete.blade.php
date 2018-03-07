{!! Form::open(['url'=> '/Array/'.$array->id, 'method'=> 'DELETE','class'=>'form-group ','before' => 'csrf']) !!}
<div>
		<input type="submit" value="Eliminar" class="btn btn-danger btn-block">
</div>
{!! Form::close() !!}