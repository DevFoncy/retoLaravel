@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-12 col-sm-6">
	 		<div class="card">
	 			<div class="card-header text-center"> 
	 				<h4>Crear Menu del Dia</h4> 
	 				<small> Fecha de hoy : {{$date_now}}</small>
	 				
	 			</div>
	 			<div class="card-body">
	 				<h5>Escoje el plato que deseas agregar a la carta del día</h5>
	 					<div class="row">	
	 						 
	 						 	@foreach($menus as $menu)
	 						 	 <div class="col-md-2 col-sm-4">
				 					<div class="card">			
						 				 <div class="cart-header">
						 				   	 <small> Nombre del Plato : {{$menu->dish->name}}</small> <br>
						 				 </div>
						 				 <div class="cart-body">
						 				   	 <small> Precio : {{$menu->dish->price}}</small><br>
						 				   	 <small> Dia del Menu: {{$menu->fecha}}</small> 	
						 				 
						 					
					 						{!!Form::open(['route'=>'menus.store'])!!}
					 							<div class="form-group">	
						 									{{Form::hidden('restaurant_id',$restaurant_id)}}
						 									{{Form::hidden('dish_id',$menu->dish->id)}}
						 									{{Form::hidden('fecha',$day_now)}}
						 									{{Form::submit('Agregar a la carta',['class'=>'btn btn-sm btn-warning float-right'])}}			
					 							</div>
					 						{!!Form::close()!!} 					
					 				    </div><!--cart-body-->
				 				 	</div><!--card-->
				 				 </div>
			 				 @endforeach
	 					</div><!--row-->
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection