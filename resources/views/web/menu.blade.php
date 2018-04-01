@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h2 align="center">Restaurant <small> <b>{{$menu->restaurant->name}} </b> </small></h2>
	<h3 align="center">Menú del dia <small> - {{$menu->fecha}}</small></h3>
	<h4> Escoje los platos que desees </h4>
	
	<div class="row">		
     	@foreach($menu->dishes as $dish)	
			<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
							<h3> Plato : {{$dish->name}}</h3>
					  </div>
					  <div class="card-body">
					    <h4 class="card-title"> Precio : {{$dish->price}}  soles</h4>
						    @if($dish->file)
						     <img  width="200" class="img-responsive" src="{{$dish->file}}" alt="Card image cap">
						     @endif
						     <hr>
						     <a href="#" class="btn btn-info float-right">Pedir</a>
						</div>
					</div>
					
			</div>
		@endforeach
	</div>
</div>

@endsection