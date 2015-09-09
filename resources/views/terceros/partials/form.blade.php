<div class="col-sm-6">
	
	<div class="form-group">

	{!! form::text('nit',null,['class' => 'form-control floating-label','placeholder' => 'NIT:']) !!}
		
	</div>

	<div class="form-group">

	{!! form::text('nombre',null,['class' => 'form-control floating-label','placeholder' => 'Nombre:']) !!}
		
	</div>

	<div class="form-group">

	{!! form::select('rol',
		['cliente' => 'Cliente','proveedor' => 'Proveedor'],
		null,
		['class' => 'form-control floating-label','placeholder' => 'Rol:']) !!}
		
	</div>

	<div class="form-group">

	{!! form::text('direccion',null,['class' => 'form-control floating-label','placeholder' => 'Direccion:']) !!}
		
	</div>

	<div class="form-group">

	{!! form::text('telefono',null,['class' => 'form-control floating-label','placeholder' => 'Telefono:']) !!}
		
	</div>

	</div>

	<div class="col-sm-6">

	<div class="form-group">

	{!! form::email('email',null,['class' => 'form-control floating-label','placeholder' => 'Email:']) !!}
		
	</div>

	<div class="form-group">

	{!! form::textarea('notas',null,['class' => 'form-control floating-label', 'rows' => '8','placeholder' => 'Notas:']) !!}
		
	</div>
	
		
	
</div>