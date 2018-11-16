<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
   
    <link rel="icon" href="#">

    <title>Green Market</title>

    <!--llamados -->	
	{!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/carousel.css')!!}
    {!!Html::style('tether-1.3.3/dist/css/tether.min.css')!!}
    {!!Html::style('font-awesome/css/font-awesome.min.css')!!}
	{!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.css')!!}	
	
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
   
    <!--<link href="css/carousel.css" rel="stylesheet">-->
  </head>
   <body>
  <div class="container">

        @include('nav.navigation')

    </br>
	<div class="row " >
		<center>
			<div id="Categories" class="list-group pull-left ">							
				<a id="Frutas_Categoria" class="list-group-item" style="background-color:#f3d0aa;color:white;width:150px;" href="{!!URL::to('/order/frutas')!!}">FRUTAS</a>
				<a id="Verduras_Categoria" class="list-group-item" style="width:150px" href="{!!URL::to('/order/verduras')!!}">VERDURAS</a>	
				
			</div>
			<div id="Categories" class="list-group pull-right" style="margin-right:35px">	

					<!-- Busqueda  en order controller tenemos el request y el dd -->

				{!! Form::open(['url' => 'order/search_Frutas', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull right', 'role' => 'search'])!!}
				 <!-- <form class="navbar-form navbar-left" role="search"> -->
  						<div class="form-group">
  						{!! Form::text('productoName', null, ['class' => 'form-control', 'placeholder' => 'Nombre de producto']) !!}
    					<!-- <input type="text" class="form-control" placeholder="Buscar"> -->
  						</div>
 						 <button type="submit" class="btn btn-default fa fa-search"></button>
						<!-- </form> -->
				{{ Form::close() }}

			</div>
		</center>
	</div>
	<div id="CategoryProducts" class="row" style="min-height:300px;">


	@foreach($products as $product)	
	<div class="col-xs-6 col-sm-3" style="min-width:154px;">
		<div class="thumbnail scrollflow -slide-bottom -opacity">				
		<img style="height:100px;width:100px" src="{{asset($product->imagen)}}"></img>
		<div class="caption" style="height:auto;">
		<h4 style="font-size: 14px;font-weight: bold;">{{$product->name}}</h4>
		<p style="font-size: 12px;">{{$product->descripcion}}</p>
		<h4 style="font-size: 12px;">{{$product->unidad_venta}}</h4>
		</div>
		<center>
		<h4 style="font-size: 14px;font-weight: bold;">${{$product->precio}}</h4>
		<div style="height:5px;"></div>		
		<button onclick="add('{{$product->id}}','{{$product->name}}','{{$product->precio}}','{{$product->unidad_venta}}')" id="2_Rojas y grandes_550_Manzana Roja_Unidad" class="btn btn-primary" style="width:120px;">Añadir al Carro</button>
		</center>
		<div style="height:8px;"></div>
		</div>
		</div>						    
	@endforeach		
	</div> 
	
	{{ $products->links() }}

   

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
	{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')!!}
	{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js')!!}
	{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')!!}
	{!!Html::script('js/eskju.jquery.scrollflow.min.js')!!}	
	{!!Html::script('js/addCart.js')!!}	
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


