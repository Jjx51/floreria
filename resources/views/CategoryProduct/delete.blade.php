{!! Form::open(['url'=> '/Categoryp/'.$categoria->id, 'method'=> 'DELETE','class'=>'form-group ','before' => 'csrf']) !!}
<div>
		<input type="submit" value="Eliminar" class="btn btn-danger btn-block btn-sm">
</div>
{!! Form::close() !!}