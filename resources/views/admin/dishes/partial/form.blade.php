<div class="form-group">
	{{Form::label('name','Nombre del Plato')}}
	{{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>

<div class="form-group">
	{{Form::label('price','Precio')}}
	{{Form::text('price',null,['class'=>'form-control','id'=>'price'])}}
</div>

<div class="form-group">
	{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
