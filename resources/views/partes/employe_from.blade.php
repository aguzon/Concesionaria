<div class="modal fade" id="modal3">
	<div class="modal-dialog"><!--aparece el formulario en el centro-->
		<div class="modal-content"><!--aparece en formulario con fondo-->
			<div class="modal-header">
				{!! Form::open()!!}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						{!! Form::label('Apellido', '') !!}
						{!! Form::text('Apellido', '', ['class'=>'form-control', 'id'=>'apellido', 'placeholder' => 'apellido', 'required']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('Nombres', 'Nombres') !!}
							{!! Form::text('nombre', '', ['class'=>'form-control', 'required', 'id'=>'nombre', 'placeholder' => 'nombres']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('E-mail', 'E-mail') !!}
							{!! Form::text('E-mail', '', ['class'=>'form-control', 'placeholder' => 'email', 'id'=>'email', 'required']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						{!! Form::label('DNI', '') !!}
						{!! Form::text('DNI', '', ['class'=>'form-control', 'id'=>'dni', 'placeholder' => 'dni', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						{!! Form::label('Telefono', '') !!}
						{!! Form::text('Telefono', '', ['class'=>'form-control', 'required', 'placeholder' => 'Telefono', 'id'=>'telefono']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('Area', 'Area') !!}
							{!! Form::select('size', ['A' => 'Area 1', 'B' => 'Area 2', 'C' => 'Area 3'], null, ['class'=>'form-control', 'id'=>'area', 'placeholder' => 'Elige el area'])!!}
						</div>
					</div>
				</div>
				<div class="form-group">
				
					<!-- Muestra el botón de forma destacada para descubrir fácilmente
					     el botón principal dentro de un grupo de botones -->
					<button type="button" class="btn btn-warning" id="agregar_employe">Agregar</button>
 				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>