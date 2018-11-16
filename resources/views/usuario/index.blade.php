@extends('Administrador')
	@section('content')
	@include('alerts.success')
	@include('alerts.request')
	<div class="users">
		<table class="table">
			<thead>
				<th class="success">Nombre</th>
				<th class="success">Correo</th>
				<th class="success">Operacion</th>
			</thead>
			@foreach($users as $user)
				<tbody>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						{!!link_to_route('usuarios.edit', $title = 'Administrar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
		{!!$users->render()!!}
	</div>
	@endsection