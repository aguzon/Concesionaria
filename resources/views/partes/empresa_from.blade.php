<div class="modal fade" id="modal5">
	<div class="modal-dialog"><!--aparece el formulario en el centro-->
		<div class="modal-content"><!--aparece en formulario con fondo-->
			<div class="modal-header">
				{!! Form::open(['route'=>'empresa.store', 'method'=>'POST'])!!}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						{!! Form::label('Nombre', '') !!}
						{!! Form::text('nombre', '', ['class'=>'form-control', 'required', 'placeholder' => 'Nombre']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('Informacion', '') !!}
							{!! Form::text('informacion', '', ['class'=>'form-control', 'required', 	'placeholder' => 'Informacion']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('Email', '') !!}
							{!! Form::text('email', '', ['class'=>'form-control', 'required', 	'placeholder' => 'example@example.com']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('Telefono', '') !!}
							{!! Form::text('telefono', '', ['class'=>'form-control', 'required', 	'placeholder' => '3794914905']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
				
					<!-- Muestra el botón de forma destacada para descubrir fácilmente
					     el botón principal dentro de un grupo de botones -->
					<button type="submit" class="btn btn-warning">Agegar</button>
 				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>