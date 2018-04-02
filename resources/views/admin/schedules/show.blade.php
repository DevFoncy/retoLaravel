@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				Ver Plato	
	 			</div>
	 			<div class="card-body">
	 				<p><strong>Nombre: </strong>{{$dish->name}}</p>
	 				<p><strong>Precio: </strong>{{$dish->price}}</p>
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection