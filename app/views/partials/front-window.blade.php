<div class="box pav-categoryproducts no-box">
<div class="tab-nav">
    <ul class="h-tabs" id="producttabs{{$num }}">
        <li>
        <a href="#tab-cattabs{{ $num }}" data-toggle="tab" class="box-heading">
            <span style="margin-left:65%">{{ $headerTitle }}</span>
            <em class="shapes right"></em>	
            <em class="line"></em>
        </a>
        </li>
    </ul>
</div>


<div class="box-content">	
<div class="tab-content">  
<div class="tab-pane  clearfix" id="tab-cattabs{{ $num }}">	
<div class="carousel-controls">
    <a class="carousel-control left fa" href="#boxcats{{ $num }}" data-slide="prev">
        <em class="fa fa-angle-left"></em>
    </a>
    <a class="carousel-control right" href="#boxcats{{ $num }}" data-slide="next">
        <em class="fa fa-angle-right"></em>
    </a>
</div>



<div class="pavproducts{{ $num }} slide" id="boxcats1">
<div class="carousel-inner">
<div class="item active">
<div class="row">


@foreach($items as $item)
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-cols">
    <div class="product-block">
        <div class="image ">
            <span class="product-label product-label-special">
                <span>sell</span>  								
            </span>
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
            <div class="left">
                <h3 class="name">
                {{ HTML::link('products/show/'.$item->id, $item->name, array('class' => 'window'))}}
                </h3> 
                <div class="price">
                    <span class="price-new">${{ $item->price  }}</span>
                </div>
            </div>
            <div class="right">
                <div class="rating">		
                    <img src="front/image/stars-4.png" alt="Based on 1 reviews." />
                </div>                                                                                                                                                            
                <div class="action">
                    <div class="cart">                                                                                                                                                                       
                        <button class="btn btn-shopping-cart" onclick="addtocart({{ $item->id }})">
                            <span class="fa fa-shopping-cart product-icon hidden-sm hidden-md">&nbsp;</span>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                    <div class="button-group">
                        <div class="wishlist">
                            <a title="Like" class="fa fa-heart product-icon">
                            </a>	
                        </div>
                        <div class="compare">			
                            <a title="Available" class="fa fa-check product-icon"></a>	
                        </div>
                    </div>													
                </div>
            </div>												
        </div>
    </div>											
</div><!--product cols-->
@endforeach


</div><!-- End row-->
</div><!-- End item-active -->
</div><!-- End carousel-inner -->
</div><!-- End pavproducts -->
</div><!-- End tab-pane -->
</div><!-- End tab-content-->
</div><!-- End box-content-->
</div><!-- End box pav-categoryproducts no-box -->




<script type="text/javascript">
$(function () {
$('.pavproducts{{ $num }}').carousel({interval:99999999999999,auto:false,pause:'hover'});
$('#producttabs{{ $num }} a:first').tab('show');
});
</script>


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