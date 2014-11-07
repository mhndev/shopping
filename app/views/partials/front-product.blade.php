<div class="col-lg-3 col-md-3 col-sm-3 product-cols">
	<div class="product-block">
	<div class="image ">
		<span class="product-label product-label-special">
		<span>{{ $latest['title'] }}</span>  								
		</span>
		<!-- Swap image -->
		<div class="flip">
			<a href="" class="swap-image">
			{{ HTML::image($latest['image'] , $latest['text'] , array('title'=>$latest['text'] , 'class'=>'front')) }}
			</a>
		</div>
<a class="pav-colorbox btn btn-theme-default" href="{{ URL::to('products/show/' . $latest['id']) }}">
		<em class="fa fa-plus"></em>
		<span>More</span>
		</a>
	</div>
	<div class="product-meta">
		<div class="left">
			<h3 class="name">
 {{ HTML::link('products/show/'.$latest['id'], $latest['text'], array('class' => 'window'))}}			
			</h3>
			<div class="price">	
				<span class="price-new">{{ $latest['price'] - $latest['deals'] }}</span>
			</div>
		</div>
		<div class="right">
			<div class="rating">
				<img src="front/image/stars-3.png" alt="Based on 1 reviews." />
			</div>
			<div class="action">
				<div class="cart">        
					<button class="btn btn-shopping-cart" onclick="addtocart({{ $latest['id'] }})">
					<span class="fa fa-shopping-cart product-icon hidden-sm hidden-md">&nbsp;</span>
					<span>Add to Cart</span>
					</button>										
				</div>
				<div class="button-group">
					<div class="wishlist"> 
						<a title="Like" class="fa fa-heart product-icon"></a>
					</div>
					<div class="compare">
						<a title="Available" class="fa fa-check product-icon"></a>
					</div>
				</div>
			</div>
		</div>																		
	</div>		
	</div><!--product box-->
</div><!--product cols-->




<script>
	function addtocart(id){
		$.ajax({
		  url: "{{ URL::to('addtocart/') }}/"+id,
		  context: document.body
		}).done(function() {
		  //$( this ).addClass( "done" );
		  console.log('done');
		});
	}
</script>