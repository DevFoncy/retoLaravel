@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				<b>Módulo Administrador - Lista de Platos</b>  <a class="btn btn-sm btn-primary float-right" href="{{route('dishes.create')}}">Crear Plato</a>
	 				<br>
	 				<small>Platos totales: 	{{$count_dishes}} </small>
	 			</div>
	 			<div class="card-body">
	 				<table class="table table-striped table-hover">
					  <thead>
					    <tr>
					      <th width="10px">ID</th>
					      <th>Nombre del Plato</th>
					      <th colspan=3>&nbsp;</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($dishes as $dish)
					    <tr>
					      <td>{{$dish->id}}</td>
					      <td>{{$dish->name}}</td>
					      <td width="10px">
					      	 <a href="{{route('dishes.show',$dish->id)}}" class="btn btn-sm btn-info">
					      	 	Ver
					      	 </a>
					      </td>
					      <td width="10px">
					      	 <a href="{{route('dishes.edit',$dish->id)}}" class="btn btn-sm btn-success">
					      	 	Editar
					      	 </a>
					      </td>
					      <td width="10px">
					      	 {!!Form::open(['route'=>['dishes.destroy',$dish->id],'method'=>'DELETE'])!!}
					      	 <button class="btn btn-sm btn-danger">
					      	 	Eliminar
					      	 </button>
					      	 {!!Form::close()!!}
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
					{{ $dishes->render()}}
	 			</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection