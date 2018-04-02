@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h2 align="center">Restaurant <small> <b>{{$restaurant_name}} </b> </small></h2>
	<h4> Escoje los platos que desees </h4>
	
	<div class="row">		
     	@foreach($menus as $menu)	
			<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
							<h3> Plato : {{$menu->dish->name}}</h3>
					  </div>
					  <div class="card-body">
					    <h4 class="card-title"> Precio : {{$menu->dish->price}}  soles</h4>
					    <h5> Dia del Menu: {{$menu->fecha}}</h5>
						    @if($menu->dish->file)
						     <img  width="200" class="img-responsive" src="{{$menu->dish->file}}" alt="Card image cap">
						     @endif
						     <hr>
						     <a href="#" class="btn btn-info float-right">Pedir</a>
						</div>
					</div>
					
			</div>
		@endforeach
	</div>
	{{ $menus->render()}}
</div>

@endsection