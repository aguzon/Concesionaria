<div class="modal fade" id="modal4">
	<div class="modal-dialog"><!--aparece el formulario en el centro-->
		<div class="modal-content"><!--aparece en formulario con fondo-->
			<div class="modal-header">
				{!! Form::open(['route'=>'area.store', 'method'=>'POST'])!!}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						{!! Form::label('Descripcion', '') !!}
						{!! Form::text('descripcion', '', ['class'=>'form-control', 'required', 'placeholder' => 'Descripcion']) !!}
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('Sector', '') !!}
							{!! Form::text('sector', '', ['class'=>'form-control', 'required', 	'placeholder' => 'A, B, C..']) !!}
						</div>
					</div>
					<div class="col-md-6">
						
						{{-- <div class="form-group">
							{!! Form::label('Sector', '') !!}
							{!! Form::select('sector', $empresa, null, ['class'=>'form-control', 'required', 'placeholder' => 'A, B, C, ..', 'style'=>'width:100%', 'id'=>'empresa']) !!}
						</div> --}}
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