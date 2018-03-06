@if(!empty ($tipoAlerta))
	<div class="row">
	    <br>           
		<div class="alert alert-{{ $tipoAlerta }} alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>{{ $titulo }}</strong> {{ $mensaje }}
		</div>
	</div>
@endif