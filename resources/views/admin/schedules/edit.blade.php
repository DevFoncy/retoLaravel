@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				Editar Horario	
	 			</div>
	 			<div class="card-body">
	 				{!!Form::model($schedule,['route'=>['schedules.update',$schedule->id],
	 				'method'=>'PUT'])!!}
	 					@include('admin.dishes.partial.form')
	 				{!!Form::close()!!}
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection