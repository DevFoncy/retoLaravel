<div class="form-group">
	{{Form::label('name','Nombre del Plato')}}
	{{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>

<div class="form-group">
	{{Form::label('price','Precio')}}
	{{Form::number('price',null,['class'=>'form-control','step'=>'0.1','id'=>'price'])}}
</div>

<div class="form-group">
	{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
