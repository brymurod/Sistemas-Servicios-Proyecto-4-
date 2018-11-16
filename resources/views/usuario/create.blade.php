@extends('Administrador')
	@section('content')
	@include('alerts.success')
	@include('alerts.request')
	{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
		<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>		
		<div class="form-group">
			{!!Form::label('password','Contraseña:')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('role','Role:')!!}
			{!!Form::text('role',null,['class'=>'form-control','placeholder'=>'Ingresa el Role del usuario'])!!}
		</div>
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection