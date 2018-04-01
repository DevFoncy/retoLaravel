@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h2 align="center">Delivery Ya <small> -  Restaurantes en Lima</small></h2>
	<h4> Escoje el restaurante de tu preferencia </h4>
	<div class="row">		
		@foreach($restaurants as $restaurant)
			<div class="col-md-4 col-sm-6">
					<div class="card">
					  <div class="card-header">
							<h3><b> Restaurant {{$restaurant->name}}</b></h3>
					  </div>
					  <div class="card-body">
					    <h5> Distrito : {{$restaurant->district->name}}</h5>
						
						  @if($restaurant->file)
						  <img class="img-responsive" src="{{$restaurant->file}}" alt="Card image cap">
						  @endif
						    <p class="card-text">
								<b>Descripcion: </b>	{{$restaurant->description}} <br>
								<b>Dirección: </b> {{$restaurant->address}} <br>
								<b>Teléfono: </b> {{$restaurant->phone_number}}
						    </p>
						    <hr>
						    <a href="{{route ('menu',$restaurant->name)}}" class="btn btn-primary float-right">Ver Carta</a>
						</div>
					</div>
					
			</div>
		@endforeach
		<!--Paginador-->
		
	</div>
	{{ $restaurants->render()}}
</div>


@endsection