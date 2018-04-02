@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				<b>Lista de Restaurantes de Lima</b> 
	 			</div>
	 			<div class="card-body">
	 				<table class="table table-striped table-hover">
					  <thead>
					    <tr>
					      <th width="10px">ID </th>
					      <th>Nombre</th>
					      <th>Tipo</th>
					      <th>Distrito</th>
					      <th style="text-align: center" colspan="2">Accion</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($restaurants as $restaurant)
					    <tr>
					      <td>{{$restaurant->id}}</td>
					      <td>{{$restaurant->name}}</td>
					      <td>{{$restaurant->description}}</td>
					      <td>{{$restaurant->district->name}}</td>
					      <td width="10px">
					      	 <a href="{{route('restaurant-schedule',$restaurant->id)}}" class="btn btn-sm btn-info">
					      	 	Administrar Horario
					      	 </a>
					      </td>
					      <td width="10px">
					      	 <a href="{{route('restaurant-carta-del-dia',$restaurant->id)}}" class="btn btn-sm btn-success">
					      	 	Carta del día
					      	 </a>
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection