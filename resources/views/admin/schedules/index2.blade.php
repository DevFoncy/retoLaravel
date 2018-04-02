@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> ,
	 				<b>Lista de Horarios</b>  <a class="btn btn-sm btn-primary float-right"  href="{{route('schedules-create',$restaurant_id)}}">Crear Horario</a>
	 			</div>
	 			<div class="card-body">
	 				<table class="table table-striped table-hover">
					  <thead>
					    <tr>
					      <th width="10px">ID</th>
					      <th>Horario</th>
					      <th colspan=1>&nbsp;</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($schedules as $schedule)
					    <tr>
					      <td>{{$schedule->id}}</td>
					      <td>{{$schedule->schedule}}</td>
					      <td width="10px">
					      	 {!!Form::open(['route'=>['schedules.destroy',$schedule->id],'method'=>'DELETE'])!!}
					      	 <button class="btn btn-sm btn-danger">
					      	 	Eliminar
					      	 </button>
					      	 {!!Form::close()!!}
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