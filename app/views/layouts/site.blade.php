<!DOCTYPE html>
<html class="rtl" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta name="viewport" content="width=device-width">
<meta charset="UTF-8" />
<title>{{ Lang::get('persian.khaneye-kala' , array() , 'fa') }}</title>
{{ HTML::style('front/css/bootstrap.css') }}
{{ HTML::style('front/css/stylesheet.css') }}
{{ HTML::style('front/css/font-awesome.min.css') }}


<?php 
    $menus = Menu::where('name' , '!=' , 'footerText')->get();
    $footer = Menu::where('name' , '=' , 'footerText')->firstOrFail();
?>
<body>
	<section id="page" class="offcanvas-pusher" role="main">
		@include('partials.front-header')
		@include('partials.front-menu')
		@yield('content')
		@include('partials.front-footer') 
	</section>
</body>

</html>