@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				Crear Horario 
	 			</div>
	 			<div class="card-body">
	 				{!!Form::open(['route'=>'schedules.store'])!!}
	 					@include('admin.schedules.partial.form')
	 				{!!Form::close()!!}
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection