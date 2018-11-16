@extends('Administrador')
	@section('content')
	@include('alerts.success')
	@include('alerts.request')
	{!!Form::model($producto,['route'=>['productos.update',$producto],'method'=>'PUT'])!!}
		<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('descripcion','Descripcion:')!!}
			{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>	
		<div class="form-group">
		{!!Form::label('precio','Precio:')!!}
		{!!Form::number('precio',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario','step'=>'any'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('unidad','Unidad:')!!}
			{!!Form::text('unidad_venta',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>			
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

		{!!Form::open(['route'=>['productos.destroy', $producto], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection