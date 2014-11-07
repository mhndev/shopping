n
{{ HTML::script('front/js/layerslider/jquery.themepunch.plugins.min.js') }}
{{ HTML::script('front/js/layerslider/jquery.themepunch.revolution.min.js') }}


<section id="columns" class="offcanvas-siderbars">                                                        
<div class="container">
<div class="row">
<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div id="column-left" class="sidebar">
	<div id="banner0" class="box banner hidden-xs hidden-sm">
		<div>
				<img src="front/image/banner-sports-men-279x190.png" alt="Samsung" title="Samsung" class="img-responsive" />
		</div>
	</div><!--side banner-->
	<script type="text/javascript">
	$(document).ready(function() {
	$('#banner0 div:first-child').css('display', 'block');
	});

	var banner = function() {
	$('#banner0').cycle({
	before: function(current, next) {
	$(next).parent().height($(next).outerHeight());
	}
	});
	}

	setTimeout(banner, 2000);
	</script>

		
		@foreach($var['offed'] as $item)
			@include('partials.front-deals' , array('item'=>$item))
		@endforeach


	<script type="text/javascript">
	$('#pavdeals7').carousel({interval:false,auto:false,pause:'hover'});
	</script>



	@include('partials.front-blogs')



	<script type="text/javascript">
	$('#productcarousel29').carousel({interval:false,auto:false,pause:'hover'});
	</script>	
	</div>	
</aside>

<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12">         
<div id="content">
<div class="content-top">



@include('partials.front-slider' , array('sliders'=>$var['sliders'] , 'slider_settings'=>$var['slider_settings']))


<div id="banner1" class="box banner hidden-xs hidden-sm">
	<div>
		
			<img src="front/image/banner-tiger-873x160.png" alt="Banner Tiger" title="Banner Tiger" class="img-responsive" />
		
	</div>
</div><!--banner sale-->


<script type="text/javascript">                   
$(document).ready(function() {
$('#banner1 div:first-child').css('display', 'block');
});

var banner = function() {
$('#banner1').cycle({
before: function(current, next) {
$(next).parent().height($(next).outerHeight());
}
});
}

setTimeout(banner, 2000);
                               
</script>

@include('partials.front-latest')


<div id="banner2" class="box banner hidden-xs hidden-sm">
<div>
<img src="front/image/banner-sale-off-873x160.png" alt="banner-sale-off" title="banner-sale-off" class="img-responsive" />

</div>
</div><!--banner sale-->
<script type="text/javascript">
                                
$(document).ready(function() {
$('#banner2 div:first-child').css('display', 'block');
});

var banner = function() {
$('#banner2').cycle({
before: function(current, next) {
$(next).parent().height($(next).outerHeight());
}
});
}

setTimeout(banner, 2000);
                               
</script>

</div><!--end of top content-->

<div class="content-bottom"> 


<?php 
$num = 1;
$headerTitle = Lang::get('persian.mosetSelledProducts' , array() , 'fa');
$items = $var['mostSelled'];
?>
<div>
	@include('partials.front-window' , array('num'=>$num , 'headerTitle'=>$headerTitle , 'items'=>$items))
</div>


<?php 
$num = 2;
$headerTitle = Lang::get('persian.khaneyejalasuggest' , array() , 'fa');
$items = $var['specs'];
 ?>
<div>
	@include('partials.front-window' , array('num'=>$num , 'headerTitle'=>$headerTitle ,'items'=>$items))
</div>

</section>

@include('partials.front-brands')
</div>
</div>