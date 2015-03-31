<!DOCTYPE html>
<html>
  <head>
    	@include('home.head')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>Encurtador de URL</h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			            	 @if(Session::has('message'))

								<div class="alert {{ Session::get('alert-class', 'alert-success') }}">
									<button type="button" class="close" data-dismiss="alert">×</button>
									{{ Session::get('message') }}
								</div>
							@endif
							@if(url_mine)
								<h6>Sua URL é: {{url_mine}}</h6>
							@else
								 <h6>Cole aqui sua URL :</h6>
							@endif

							@foreach ($urls as $url)

								{{$url->id}}


							@endforeach
			               
			                <form method="post">
			                	<input class="form-control" type="text" name="url" placeholder="URL"> <br>
				                <div>
				                	<button class="  btn btn-primary signup">Gerar</button>
				                </div> 
			                </form>
			            </div>
			            <div class="already">

			            	<p>© 2015 Todos os direitos resevados</p>
			            	}
			        	</div>

			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>