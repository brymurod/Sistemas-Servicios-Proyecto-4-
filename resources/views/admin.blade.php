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

    

		<table class="table">
			<h3>Current Data</h3>
			<thead>
				<th class="info">Fruit Text</th>
				<th class="info">Vegetables Text</th>
				<th class="info">Tips Text</th>
				<th class="info">Vision text</th>
				<th class="info">Mision Text</th>
				<th class="info">Contacto Text</th>
			</thead>
				@foreach($headers_information as $header_information)
				<tbody>
					<td id="tdh1" class="success">{{$header_information->h1}}</td>
					<td id="tdh2" class="success">{{$header_information->h2}}</td>
					<td id="tdh3" class="success">{{$header_information->h3}}</td>
					<td id="tdh4" class="success">{{$header_information->h4}}</td>
					<td id="tdh5" class="success">{{$header_information->h5}}</td>
					<td id="tdh6" class="success">{{$header_information->h6}}</td>					
				</tbody>
				@endforeach
		</table>
		
		{!!Form::model($header,['route'=>['admin.update',$header],'method'=>'PUT'])!!}
		<div class="form-group">
			{!!Form::label('h1','Fruit Text:')!!}
			{!!Form::textarea('h1',null,['class'=>'form-control','placeholder'=>''])!!}
		</div>
		<div class="form-group">
			{!!Form::label('h2','Vegetable Text:')!!}
			{!!Form::textarea('h2',null,['class'=>'form-control','placeholder'=>''])!!}
		</div>
		<div class="form-group">
			{!!Form::label('h3','Healthy Tip Text:')!!}
			{!!Form::textarea('h3',null,['class'=>'form-control','placeholder'=>''])!!}
		</div>
		<div class="form-group">
			{!!Form::label('h4','Mision:')!!}
			{!!Form::textarea('h4',null,['class'=>'form-control','placeholder'=>''])!!}
		</div>
		<div class="form-group">
			{!!Form::label('h5','Vision:')!!}
			{!!Form::textarea('h5',null,['class'=>'form-control','placeholder'=>''])!!}
		</div>
		<div class="form-group">
			{!!Form::label('h6','News:')!!}
			{!!Form::textarea('h6',null,['class'=>'form-control','placeholder'=>''])!!}
		</div>
<br>	
		<!--<table class="table" ng-app = "app" ng-controller="TextareaCtrl" id="TextareaCtrl">
			<h3>New Data</h3>
			<div class="row">
			<thead>
				<th class="col-md-4">Fruit Text</th>
				<th class="col-md-4">Vegetables Text</th>
				<th class="col-md-4">Tips Text</th>
			</thead>		
			<div>
			<div class="row">
				<tbody>
					<td class="col-md-4">
						<a href="#" editable-textarea="text.h1">
							<pre>[[ text.h1 || 'no description' ]]</pre>
						</a>
					</td>
					<td class="col-md-4">
						<a href="#" editable-textarea="text.h2">
							<pre>[[ text.h2 || 'no description' ]]</pre>
						</a>
					</td>
					<td class="col-md-4">
						<a href="#" editable-textarea="text.h3">
							<pre>[[ text.h3 || 'no description' ]]</pre>
						</a>
					</td>					
				</tbody>	
				<div>
		</table>-->
		{!!Form::submit('Update',['class'=>'btn btn-primary'])!!}		
		{!!Form::close()!!}				
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
