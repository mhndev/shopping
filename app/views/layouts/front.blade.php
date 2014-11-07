<!DOCTYPE html>
<html class="rtl" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta name="viewport" content="width=device-width">
<meta charset="UTF-8" />

<title>{{ Lang::get('persian.khaneye-kala' , array() , 'fa') }}</title>
{{ HTML::style('front/image/cart.png') }}
{{ HTML::style('front/css/bootstrap.css') }}
{{ HTML::style('front/css/stylesheet.css') }}
{{ HTML::style('front/css/font-awesome.min.css') }}
{{ HTML::style('front/css/pavdeals.css') }}
{{ HTML::style('front/css/sliderlayer/css/typo.css') }}
{{ HTML::style('front/css/pavproducts.css') }}
{{ HTML::style('front/css/pavmegamenu/style.css') }}
{{ HTML::style('fonts/fonts.css') }}
{{ HTML::script('front/js/jquery/jquery-1.7.1.min.js') }}
{{ HTML::script('front/js/common.js') }}
{{ HTML::script('front/js/jquery/bootstrap/bootstrap.min.js') }}
{{ HTML::script('front/js/pavdeals/countdown.js') }}    
</head>
	<body id="offcanvas-container" class="offcanvas-container fs12 page-home ">
		<section id="page" class="offcanvas-pusher" role="main">
			@include('partials.front-header')
			@include('partials.front-menu')
			{{ $content }}
			@include('partials.front-footer')                                 
    	</section> 
    </body>
</html>