<div class="text-center margen-superior margen-inferior">
	<h3>Nombre del Producto</h3>
</div>

<div class="borde margen-inferior pedido-home">
	<div class="row margen-inferior margen-superior">
		<div class="col-lg-12 col-md-12 col-sm-12 margen-superior">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<img src="img/ejemplo.jpeg" width="100%" alt="" class="img-rounded img-responsive imagen-home">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8">
				<p>Descripcion</p>
				<textarea class="form-control" rows="9"></textarea>
			</div>
		</div>
	</div>

	<div class="row margen-superior">
			
		<form>
			<div class="col-md-6">
				<div class="form-group">
					<label for="InputNombre">Nombre del Cliente</label>
					<input type="text" class="form-control" id="InputNombre" placeholder="">
				</div>
			</div>
							
			<div class="col-md-6">
				<div class="form-group">
					<label for="InputNombre1">Dirección</label>
					<input type="text" class="form-control" id="InputNombre1" placeholder="">
				</div>
			</div>
				
			<div class="col-md-6">
				<div class="form-group">
					<label for="InputNombre2">Nombre del destinatario</label>
					<input type="text" class="form-control" id="InputNombre2" placeholder="">
				</div>
			</div>
							
			<div class="col-md-6">
				<div class="form-group">
					<label for="InputNombre3">Referencia del repartidor</label>
					<input type="email" class="form-control" id="InputNombre3" placeholder="">
				</div>
			</div>
						
			<div class="col-md-6">
				<div class="form-group">
					<label for="InputNombre4">Costo de Envío</label>
					<input type="number" class="form-control" id="InputNombre4" placeholder="">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group5">
					<label for="InputNombre">Teléfono</label>
					<input type="tel" class="form-control" id="InputNombre5" placeholder="">
				</div>
			</div>

			<div class="col-md-12">							
				<label for="InputNombre">Mensaje </label>
				<textarea class="form-control" rows="2"></textarea>
			</div>
		</form>			
	</div>

	<div class="row margen-superior">
		<div class="col-md-12 margen-inferior">
			<div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
				<a href="{{ route('inicio') }}" type="button" class="btn btn-default btn-block margen-inferior">Cancelar</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 ">
				<button type="button" class="btn btn-default btn-block margen-inferior">Añadir</button>
			</div>
		</div>
	</div>

</div>
