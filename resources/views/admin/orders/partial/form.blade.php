{{Form::hidden('order_id',$order_id)}}
{{Form::hidden('code_qr',$code_qr)}}
<div class="form-group">
	{{Form::label('name','Precio Total(soles)')}}
	{{Form::label('price',$precio_total)}}	
</div>

<div class="form-group">
	{{Form::label('name','Codigo QR generado')}}
	{{Form::label('name',$code_qr)}}	
</div>
<div class="form-group">
	{{Form::label('name','Horario de entrega')}}
	{{ Form::select('choose_schedule',$schedules,null,['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{Form::label('status','Tipo de entrega')}}
	<label>
		{{Form::radio('delivery_type','DELIVERY')}} DELIVERY
	</label>
	<label>
		{{Form::radio('delivery_type','RESTAURANT')}} RESTAURANT
	</label>
</div>

<div class="form-group">
	{{Form::label('location','Punto de Recojo')}}
	{{Form::text('location',null,['class'=>'form-control','id'=>'location'])}}
</div>



<div class="form-group float-right">
	{{Form::submit('Cancelar Pedido',['class'=>'btn btn-sm btn-primary'])}}
</div>
