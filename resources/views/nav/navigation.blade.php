		<nav class="navbar navbar-inverse navbar-static-top" style="background-color:#f3d0aa" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{!!URL::to('/')!!}">Green Market
          <i class="fa fa-refresh fa-spin fa-1x fa-fw" aria-hidden="true"></i>
          </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
					@if(Auth::check())
						@if(Auth::user()->role == 'administrador')
							<li><a href="{!!URL::to('/admin_edit')!!}"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Editar Pag Princ </a></li>
                            <li><a href="{!!URL::to('Administrador')!!}"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>Administrar</a></li>
                              
						@endif
					@endif							
						<li><a href="{!!URL::to('/order/frutas')!!}"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>Order</a></li>
                       
						<li><a href="{!!URL::to('/shop_cart')!!}"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>Shopping Cart</a></li>
						
                    </ul>
					@if(Auth::check())
					<a class="dropdown-toggle pull-right" style="margin-right:35px" data-toggle="dropdown" href="#">
                        {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i> 
                    </a>
					<a href="{!!URL::to('/logout')!!}" class="btn btn-success pull-right" style="margin-right:25px">Logout</a>
					@else
					<a href="{!!URL::to('/login_page')!!}" class="btn btn-success pull-right" style="margin-right:25px">Login</a>	
					<a href="{!!URL::to('/registration_page')!!}" class="btn btn-success pull-right" style="margin-right:25px">Registrarse</a>	
					@endif
                </div>
            </div>
        </nav>