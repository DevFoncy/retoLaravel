
<div class="form-group">
	{{Form::label('name','Horario de entrega')}}
	{{ Form::select('schedule', ['9:00 am-10:00 am'=>'9:00 am-10:00 am','10:00 am-11:00 am'=>'10:00 am-11:00 am','11:00 am-12:00 am'=>'11:00 am-12:00 am','12:00 am-1:00 pm'=>'12:00 am-1:00 pm','1:00 pm-2:00 pm'=>'1:00 pm-2:00 pm','2:00pm-3:00 pm'=>'2:00pm-3:00 pm','3:00 pm-4:00 pm'=>'3:00 pm-4:00 pm','4:00 pm-5:00 pm'=>'4:00 pm-5:00 pm','5:00 pm-6:00 pm'=>'5:00 pm-6:00 pm','6:00 pm-7:00 pm'=>'6:00 pm-7:00 pm','7:00 pm-8:00 pm'=>'7:00 pm-8:00 pm','8:00 pm-9:00 pm'=>'8:00 pm-9:00 pm','9:00 pm-10:00 pm'=>'9:00 pm-10:00 pm','10:00 pm-11:00 pm'=>'10:00 pm-11:00 pm'], null, ['class' => 'form-control']) }}
</div>

	{{Form::hidden('restaurant_id',$restaurant_id)}}
<div class="form-group float-right">
	{{Form::submit('Guardar horario',['class'=>'btn btn-sm btn-primary'])}}
</div>
