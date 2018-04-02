@extends('layouts.app')


@section('content')
	<div class="container">
	 <div class="row">
	 	<div class="col-md-8 col-sm-6 offset-2">
	 		<div class="card">
	 			<div class="card-header"> 
	 				<b>Lista de Platos pedidos</b>  
	 				<br>
	 				<small>Platos totales: 	{{$count_orders}} </small>

	 			</div>
	 			<div class="card-body">
	 				<table class="table table-striped table-hover">
					  <thead>
					    <tr>
					      <th width="10px">ID</th>
					      <th>Nombre del Plato</th>
					      <th>Precio(soles)</th>
					      <th>Observacion:</th>
					      <th colspan=1>&nbsp;</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $acu=0;$precio_total=0;?>
					  	@foreach($orders as $order)
					    <?php
					       $precio_total=$order->dish->price+$acu;
					       $acu=$precio_total;
					    ?>
					    <tr>
					      <td>{{$order->id}}</td>
					      <td>{{$order->dish->name}}</td>
					      <td>{{$order->dish->price}}</td>
					      <td>{{$order->note}}</td>
					      <td width="10px">
					      	 {!!Form::open(['route'=>['orders.destroy',$order->id],'method'=>'DELETE'])!!}
					      	 <button class="btn btn-sm btn-danger">
					      	 	Eliminar plato
					      	 </button>
					      	 {!!Form::close()!!}
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
					<h4 align="right">Monto a pagar: <?php  echo $precio_total; ?></h4>
					@if($count_orders>0)
					<a href="{{route ('factura',[$order->id,$precio_total])}}" class="btn btn-primary float-right">Terminar pedido</a>
					@endif
				</div>
	 		</div>
	 		
	 	</div>
	 </div>

	</div>


@endsection