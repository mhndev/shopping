<div class="layerslider-wrapper hidden-xs hidden-sm" style="max-width:873px;">
	<div class="bannercontainer banner-boxed" style="padding: 0;margin: 0px 0px 18px 0px;">
		<div id="sliderlayer1" class="rev_slider boxedbanner" style="width:100%;height:370px; " >
		<ul>
		@foreach($sliders as $slider)
			<li data-masterspeed="300"  data-transition="curtain-2" data-slotamount="7" data-thumb="image/layerslider/slider-01.png">
				{{ HTML::image($slider->image , 'title' , array('title'=>'title')) }}
				<div class="caption large_black_text lfr easeOutExpo easeOutExpo"
				data-x="{{ $slider->left }}" data-y="110" data-speed="300" data-start="2593" style="font-family:'yekan'"
				data-easing="{{ $slider_settings->textanim }}"  >
				{{ $slider->param1 }}										 	
				</div>
				<div class="caption very_large_text lfl easeInOutQuint easeInOutQuint"
				data-x="{{ $slider->left }}" data-y="140" data-speed="300" data-start="1912" data-easing="{{ $slider_settings->textanim }}"  style="font-family:yekan">
				{{ $slider->param2 }}									 	
				</div>
				<div class="caption very_large_black_text lfl easeInOutCubic easeInOutCubic"
				data-x="{{ $slider->left }}" data-y="187" data-speed="300" data-start="1099" data-easing="{{ $slider_settings->textanim }}"  style="font-family:'yekan'">
				{{ $slider->param3 }}										 	
				</div>
				<div class="caption very_big_white randomrotate easeOutExpo easeOutExpo"
				data-x="{{ $slider->left }}" data-y="255" data-speed="300" data-start="1883" data-easing="{{ $slider_settings->textanim }}"  >
				<a href="#" title="">shop now</a>											 	
				</div>
			</li>
		@endforeach	
		</ul>

		<div class="tp-bannertimer tp-top"></div>
		</div>
	</div>
</div><!--slider-->




<script type="text/javascript">
	var tpj=jQuery;		
	if (tpj.fn.cssOriginal!=undefined)
	tpj.fn.css = tpj.fn.cssOriginal;

	$config = {
		delay:{{ $slider_settings->speed }},
		startheight:370,
		startwidth:873,
		hideThumbs:200,
		thumbWidth:100,						
		thumbHeight:50,
		thumbAmount:5,

		navigationType:"none",				
		navigationArrows:"verticalcentered",				
		navigationStyle:"round",			 

		navOffsetHorizontal:0,
		navOffsetVertical:20, 	

		touchenabled:"on",			
		onHoverStop:"{{ $slider_settings->stophover }}",						
		shuffle:"off",	
		stopAtSlide:-1,						
		stopAfterLoops:-1,						

		hideCaptionAtLimit:0,				
		hideAllCaptionAtLilmit:0,				
		hideSliderAtLimit:0,			
		fullWidth:"off",
		shadow:0
	};
	tpj('#sliderlayer1').revolution($config);

	console.log($config);
</script>