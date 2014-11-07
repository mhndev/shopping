<!DOCTYPE html>
<html lang="en">
 	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    	<title>Authentication App With Laravel 4</title>

    	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    	{{ HTML::style('css/main.css')}}
  	</head>

  	<body>

	  	<div class="navbar navbar-fixed-top">
		  	<div class="navbar-inner">
		    	<div class="container">
					<ul class="nav">  
						@if(!Auth::check())
							<li>{{ HTML::link('auth/register', 'Register') }}</li>   
							<li>{{ HTML::link('auth/login', 'Login') }}</li>   
						@else
							<li>{{ HTML::link('admin/logout', 'logout') }}</li>
							<li>{{ HTML::link('stores', 'انبارها') }}</li>
							<li>{{ HTML::link('yards', 'حیاط ها') }}</li>
							<li>{{ HTML::link('salons', 'سوله ها') }}</li>
						@endif
					</ul>  
		    	</div>
		  	</div>
		</div> 	            

	    <div class="container">
	    	@if(Session::has('message'))
				<p class="alert">{{ Session::get('message') }}</p>
			@endif

	    	@yield('content')
	    </div>

  	</body>
</html>