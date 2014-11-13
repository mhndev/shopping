{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}
<header id="header">
<div id="topbar">
<div class="container" style="width:980px;">
<div class="show-desktop hidden-sm hidden-xs">
<div class="quick-access pull-right">
<div class="login links">
	@if(!Auth::check())
		{{ Lang::get('persian.welcome' , array() , 'fa') }}
		{{ HTML::link('/auth/login' , Lang::get('persian.enter' , array() , 'fa')) }}

		{{ Lang::get('persian.orrrr' , array() , 'fa') }}

		{{ HTML::link( '/auth/register' , Lang::get('persian.createAccount' , array() , 'fa')) }}


	@else

	{{ User::find(Auth::user()->id)->firstname.' '.User::find(Auth::user()->id)->lastname}}
	{{ HTML::link('auth/logout' , Lang::get('persian.exit' , array() , 'fa') ) }}
	@endif



</div>
</div>
</div>
</div>
</div>

<div id="header-main" class="pattern8">
<div class="container" style="width:980px;">
<div class="pull-left logo inner">
<div id="logo-theme" class="logo-store"  style="font-size:12px;">
{{ Lang::get('persian.firstTest' , array() , 'fa') }}
<a href=""><span>{{ Lang::get('persian.khaneye-kala' , array() , 'fa') }}</span></a>
</div>


<div style=" width:150px; height:20px;color:white ; margin-left:20px; font-size:15px;">
	شماره های تماس
	<br>
  ۳۳۱۲۴۰۷۶ - ۳۳۵۰۸۸۸۵
</div>
</div>

<div class="pull-right shopping-cart inner hidden-xs hidden-sm">
<div class="cart-top">
<div id="cart" class="clearfix">


<div class="heading media">
<a id="shoppingcart" href="" style="float:left"><div class="pull-left">
<i class="icon-cart fa fa-shopping-cart"></i>
<em class="shapes left"></em>
</div></a>



<div class="cart-inner media-body">
<h4>Shopping Cart</h4>
<a><span id="cart-total">0 item(s) - $0.00</span>
<i class="fa fa-angle-down"></i>
</a>
</div>
</div>

<!-- <div class="content">
<div class="empty">Your shopping cart is empty!</div>
</div>  -->
</div>
</div>
</div>

<div id="search" style="margin-bottom:10px;">
<div class="quickaccess-toggle hidden-lg hidden-md">
<i class="fa fa-search"></i>
</div>
<div class="input-group">
<input type="text" name="search" placeholder="Search" value="" class="input-search form-control" />
<span class="input-group-btn">
<button class="button-search" type="button"><em class="fa fa-search"></em></button>
</span>
</div>
</div>
</div>
</div>
</header>



<script>
	$('#shoppingcart').colorbox({href:"{{ URL::to('/basket') }}"});
</script>
