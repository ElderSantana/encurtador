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

							@if(Session::has('url_mine'))
								<p><b> Sua URL é: <b> <a href="javascript:;">https://localhost/{{ Session::get('url_mine') }}</a> </p>
							@else
								<h6>Cole aqui sua URL :</h6>
							@endif
							

			               
			                <form method="post">
			                	<input class="form-control" type="text" name="url" placeholder="URL"> <br>
				                <div>
				                	<button class="  btn btn-primary signup">Gerar URL</button>
				                </div> 
			                </form>
			            </div>
			            <div class="already">

			            	<p>Já Possui Uma URL encurtada ? <a href="javascript:;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Desencurtar </a>
			            	
							<div class="collapse" id="collapseExample">
								<div class="content-wrap" style="margin-top: 10px;">

									@if(Session::has('messageurl'))
										<div class="alert {{ Session::get('alert-class', 'alert-success') }}">
											<button type="button" class="close" data-dismiss="alert">×</button>
											{{ Session::get('messageurl') }}
										</div>
										<p><b> Sua URL é: <b> <a href="javascript:;">{{ Session::get('url_mine') }}</a> </p>
									@endif
									@if(Session::has('url_find'))
										
										<p><b> Sua URL é: <b> <a href="javascript:;">{{ Session::get('url_find') }}</a> </p>
									@endif

									

									
									<form action="desencurta" method="post">
					                	<input class="form-control" type="text" name="url" placeholder="URL"> <br>
						                <div>
						                	<button class="  btn btn-success signup">Desencurtar URL</button>
						                </div> 
			                		</form>



								</div>
							</div>

			        	</div>

			        </div>

			        
			    </div>
			</div>
		</div>
	</div>
    
  </body>
</html>