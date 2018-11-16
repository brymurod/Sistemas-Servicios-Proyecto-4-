@extends('Administrador')
	@section('content')
	@include('alerts.success')
	@include('alerts.request')
	<div class="productos">
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operacion</th>
			</thead>
			@foreach($productos as $producto)
				<tbody>
					<td>{{$producto->name}}</td>
					<td>{{$producto->descripcion}}</td>
					<td>{{$producto->unidad_venta}}</td>
					<td>{{$producto->precio}}</td>
					<td>
						{!!link_to_route('productos.edit', $title = 'Administrar', $parameters = $producto, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
		{!!$productos->render()!!}
	</div>
	@endsection