<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Green Market</title>

    <!--llamados -->	
	{!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/carousel.css')!!}
    {!!Html::style('tether-1.3.3/dist/css/tether.min.css')!!}
    {!!Html::style('font-awesome/css/font-awesome.min.css')!!}
	
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="tether-1.3.3/dist/css/tether.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
   <link rel="icon" type="image/png" sizes="16x16" href="img/home/favicon-16x16.png">
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->
      <!--<script src="public/js/app.js"></script>-->
	  {!!Html::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')!!}
	  {!!Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')!!}
      <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
   
    <!--<link href="css/carousel.css" rel="stylesheet">-->
  </head>
   <body>
  <div class="container">

        @include('nav.navigation')

    </br>
	@if(Auth::check())
	<table class="table">
		<thead>
			<tr>
				<th class="success">Product</th>
				<th class="success">Qty</th>
				<th class="success">Price</th>
				<th class="success">Subtotal</th>
			</tr>
		</thead>		
		<tbody>			
				@if(Cart::instance(Auth::user()->name)->content())
					@foreach(Cart::instance(Auth::user()->name)->content() as $row)
						<tr>
							<td class="info">
								<p><strong><?php echo $row->name; ?></strong></p>
								<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
							</td>
							<td class="info"><input type="text" value="<?php echo $row->qty; ?>"></td>
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
	{!!link_to_route('shop_cart.store', $title = 'Ordenar', $parameters = '1', $attributes = ['class'=>'btn btn-primary'])!!}
	@else
		<h3>No hay datos añadidos</h3>
	@endif	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
    <!-- FOOTER -->
      @include('footer.footer')

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')!!}
	{!!Html::script('tether-1.3.3/dist/js/tether.min.js')!!}
	{!!Html::script('js/bootstrap.min.js')!!}
	{!!Html::script('js/jquery.min.js')!!}
	{!!Html::script('js/jquery-1.9.1.min.js')!!}
	{!!Html::script('js/ie10-viewport-bug-workaround.js')!!}
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <!--<script src="tether-1.3.3/dist/js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>    -->
     
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="js/ie10-viewport-bug-workaround.js"></script>-->    
      
    <!-- Just to make our placeholder images work. Don't actually copy the next line! 
    <script src="js/vendor/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>


