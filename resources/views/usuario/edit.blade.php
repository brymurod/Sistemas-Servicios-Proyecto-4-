@extends('Administrador')
	@section('content')
	@include('alerts.success')
	@include('alerts.request')
	{!!Form::model($user,['route'=>['usuarios.update',$user],'method'=>'PUT'])!!}
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
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

		{!!Form::open(['route'=>['usuarios.destroy', $user], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection