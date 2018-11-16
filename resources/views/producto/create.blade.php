@extends('Administrador')
	@section('content')
	@include('alerts.success')
	@include('alerts.request')	
	{!!Form::open(['route'=>'productos.store','files' => true  , 'method'=>'POST'])!!}	
		<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Producto'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('descripcion','Descripcion:')!!}
			{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa Descripcion'])!!}
		</div>	
		<div class="form-group">
		{!!Form::label('precio','Precio:')!!}
		{!!Form::number('precio',null,['class'=>'form-control','placeholder'=>'Ingresa el precio','step'=>'any'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('unidad','Unidad:')!!}
			{!!Form::text('unidad_venta',null,['class'=>'form-control','placeholder'=>'Ingrese la unidad de venta'])!!}
		</div>	
		<div class="form-group">		
		{!!Form::label('CategoriaLabel','Categoria:')!!}
		{!!Form::select('categoria', array('F' => 'Frutas', 'V' => 'Verduras'), 'F' , ['class'=>'form-control'])!!}
		</div>		
		<div class="form-group">		
		{!!Form::label('archivo','Archivo:')!!}
		{{ Form::file('imagen', ['class' => 'form-control']) }}		
		</div>		
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection