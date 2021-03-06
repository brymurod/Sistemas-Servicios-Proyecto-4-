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

   
   
   <a href="{!!URL::to('/')!!}">
    {{ HTML::image('img/home/logo.jpg', 'a picture', array('class' => 'img-responsive center-block scrollflow -slide-left -opacity','width' => 125, 'height' => 75)) }}
    </a>


		<div class="header-info">
				<h1 >Login</h1>
				@include('alerts.errors')
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
        <br>
    
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}

				{!!link_to('password/email', $title = 'Olvidaste tu contraseña?', $attributes = null, $secure = null)!!}
			</div>


    



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
  {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')!!}
  {!!Html::script('js/eskju.jquery.scrollflow.min.js')!!}

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
