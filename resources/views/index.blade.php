<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script  src="js/eskju.jquery.scrollflow.min.js"></script>

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

    </div>

    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    <div class="container">
        <!-- Jssor Slider Begin -->
        
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, .7);"></div>

            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="img/home/01.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/home/02.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/home/03.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/home/04.jpg" />
                </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->            
            <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>            
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->

            <!--<a style="display: none" href="https://www.jssor.com">Bootstrap Carousel</a>-->
        </div>
        <!-- Jssor Slider End -->
    </div>
<br>
<br>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
	  @foreach($headers_information as $header_information)
      <div class="row scrollflow -slide-top -opacity">
        <div class="col-lg-4">   
		  <img class="img-circle" src="img/home/fruits.jpg" alt="Generic placeholder image" width="200" height="140">
          <h2>Fruits</h2>
          <p>{{$header_information->h1}}</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">  
		  <img class="img-circle" src="img/home/vegetables.jpg" alt="Generic placeholder image" width="200" height="140">
          <h2>Vegetables</h2>
          <p>{{$header_information->h2}}</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">          
          <img class="img-circle" src="img/home/healthy.jpg" alt="Generic placeholder image" width="200" height="140">
		  <h2>Healthy Tip</h2>
          <p>{{$header_information->h3}}</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  @endforeach
      
      

      <!-- START THE FEATURETTES -->
    
     @foreach($headers_information as $header_information)
      <hr class="featurette-divider">      
      <div class="row featurette scrollflow -slide-right -opacity">
        <div class="col-md-7">
          <h2 class="featurette-heading">Mision. <span class="text-muted"></span></h2>
          <p class="lead">{{$header_information->h4}} </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/home/05.jpg"  alt="Generic placeholder image" width="250" height="250">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette scrollflow -slide-left -opacity">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Vision. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">{{$header_information->h5}}</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/home/logo.jpg"  alt="Generic placeholder image" width="250" height="250">
        </div>
      </div>



      <hr class="featurette-divider">

      <div class="row featurette scrollflow -slide-right -opacity">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">{{$header_information->h6}} </p>
        </div>
        <div class="col-md-5"><a href="https://www.facebook.com/GreenMarketCR/">
          <img  class="featurette-image img-responsive center-block" src="img/facebook.jpg" alt="Generic placeholder image"></a>
        </div>        
      </div>
      <button  class="pull-right scrollflow -slide-right -opacity" style="float:right; margin-right:25px"><a href="#">Back to top</a> </button>
      <p ></p>
      <hr class="featurette-divider">
      @endforeach
      <!-- /END THE FEATURETTES -->


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
	{!!Html::script('js/slider.js')!!}
	{!!Html::script('js/jssor.slider.min.js')!!}
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>	        	   	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->    
    <!-- jssor slider scripts-->    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! 
    <script src="js/vendor/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
