{!! Form::open(['url'=> '/Product/'.$product->id, 'method'=> 'DELETE','class'=>'form-group ','before' => 'csrf']) !!}
<div>
		<input type="submit" value="Eliminar" class="btn btn-default">
</div>
{!! Form::close() !!}