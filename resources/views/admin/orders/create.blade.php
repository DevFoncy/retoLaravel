@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				Detalle de Entrega 	
	 			</div>
	 			<div class="card-body">
	 				{!!Form::open(['route'=>'orders.store'])!!}
	 					@include('admin.orders.partial.form')
	 				{!!Form::close()!!}
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection