@if (session('info'))
    <div class="row">
	    <br>           
		<div class="alert alert-info alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Información</strong> {{ $info }}
		</div>
	</div>
@endif

@if (session('success'))
    <div class="row">
	    <br>           
		<div class="alert alert-success alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Operación realizada con exito</strong> {{ $success }}
		</div>
	</div>
@endif

@if (session('warning'))
    <div class="row">
	    <br>           
		<div class="alert alert-warning alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Advertencia</strong> {{ $warning }}
		</div>
	</div>
@endif

@if (session('danger'))
    <div class="row">
	    <br>           
		<div class="alert alert-danger alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Error</strong> {{ $danger }}
		</div>
	</div>
@endif
