<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p><strong>Nombre: </strong>{!!$user!!}</p>
	<p><strong>Nombre: </strong>{!!$email!!}</p>
	<p><strong>Fecha: </strong>{!!$date!!}</p>	
	<p><strong>Detalles: </strong></p>
	@if(Auth::check())
	<table class="table">
		<thead>
			<tr>
				<th class="success">Producto</th>
				<th class="success">Cantidad</th>
				<th class="success">Price</th>
				<th class="success">Unidad</th>
				<th class="success">Subtotal</th>
			</tr>
		</thead>		
		<tbody>			
				@if(Cart::instance(Auth::user()->name)->content())
					@foreach(Cart::instance(Auth::user()->name)->content() as $row)
						<tr>
							<td class="info">
								<p><strong><?php echo $row->name; ?></strong></p>								
								
							</td>
							<td class="info"><?php echo $row->qty .($row->options->has('unidad') ? ' ' .$row->options->unidad : ''); ?> <p></td>							
							<td class="info">$<?php echo $row->price; ?></td>							
							<td class="info">$<?php echo $row->total; ?></td>
						</tr>
					@endforeach
				@endif			

		</tbody>
		
		<tfoot>
			<tr>
				<td colspan="2">&nbsp;</td>
				<td>Subtotal</td>
				<td>{!!Cart::instance(Auth::user()->name)->subtotal()!!}</td>
			</tr>			
			<tr>
				<td colspan="2">&nbsp;</td>
				<td>Total</td>
				<td>{!!Cart::instance(Auth::user()->name)->total!!}</td>				
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
				<td>Tax</td>
				<td>{!!Cart::instance(Auth::user()->name)->tax()!!}</td>				
			</tr>
		</tfoot>		
	</table>		
	@else
		<h3>No hay datos añadidos</h3>
	@endif	
</body>
</html>