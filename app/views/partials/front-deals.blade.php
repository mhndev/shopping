<div id="productdeals" class="box productdeals no-box black">
	<div class="box-heading">
	<span style="margin-left:130px;">
	{{ Lang::get('persian.LatestDeals' , array() , 'fa') }}
	</span>
	<em class="shapes right"></em>	
	<em class="line"></em>
	</div>


	<div class="box-content">
		<div class="box-products slide" id="pavdeals7">
			<div class="carousel-inner">
				<div class="item active">
					<div class="row product-items">
						<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 product-cols">
							<div class="product-block">
								<div class="image ">
									<div class="product-label product-label-special">
										<div class="datas">
											<span>save</span>  								
											<span>{{ ceil($item->deals/$item->price*100) }}%</span>
										</div>
									</div>
									<!-- Swap image -->
									<div class="flip">
									<a href="" class="swap-image">



									{{ HTML::image($item->image_products , $item->name , array('title'=>$item->name , 'class'=>'front')) }}
									</a>
									</div>

									<a class="pav-colorbox btn btn-theme-default" href="{{ URL::to('products/show/' . $item->id) }}">
									<em class="fa fa-plus"></em>
									<span>More</span>
									</a>
								</div>

								<div class="product-meta">
								<h3 class="name">
								{{ HTML::link('products/show/'.$item->id, $item->name, array('class' => 'offed'))}}
								</h3>
								<div class="rating">
									<img src="front/image/stars-5.png" alt="text_reviews" />
								</div>

								<div class="price">
									<span class="price-old">${{ $item->price }}</span> 
									<span class="price-new">${{ $item->price - $item->deals }}</span>
								</div>
								</div>

								<div class="deal item-countdown clearfix"></div>

								<div class="deal-collection">                                                                                  
								</div>                             							
							</div><!--product block-->
						</div><!--product cols-->

					</div><!--item-->

				</div>
			</div>  
		</div>
	</div><!--box contet-->
</div><!--product deals-->




<script type="text/javascript">

jQuery(document).ready(function($){
	$('.item-countdown').lofCountDown({
		formatStyle:2,
		TargetDate:"01/12/2016 0:00:00",
		DisplayFormat:
		"<ul><li>%%D%% <div>Day</div></li><li> %%H%% <div>Hours</div></li><li> %%M%% <div>Mins</div></li><li> %%S%% <div>Secs</div></li></ul>",
		FinishMessage: "Expired"
	});
});
</script>