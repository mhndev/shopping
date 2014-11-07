{{ HTML::script('product/js/jquery.flexslider-min.js') }}

<div id="right">
<div class="top-right">
<div class="product-img-box">

<div id="imagezoomrahmen">
{{ HTML::image($product->image_showProduct , '' , array('id'=>'product_picture' , 'style'=>'margin-left:40px; margin-top:5px;')) }}                              
<div id="zoom" class="zoom">
<ul class="zoom_control">
<li style="display:block;" id="pic1" class="zoom_plus">
<a class="plus" title="" rel="group" href="{{ $product->image_big1 }}">
<span>&nbsp;</span>
</a>
</li>
<li style="display:none;" id="pic2" class="zoom_plus">
<a class="plus" title="" rel="group" href="{{ $product->image_big2 }}">
<span>&nbsp;</span>
</a>
</li>
<li style="display:none;" id="pic3" class="zoom_plus">
<a class="plus" title="" rel="group" href="{{ $product->image_big3 }}">
<span>&nbsp;</span>
</a>
</li>
<li style="display:none;" id="pic4" class="zoom_plus">
<a class="plus" title="" rel="group" href="{{ $product->image_big4 }}">
<span>&nbsp;</span>
</a>
</li>
<li style="display:none;" id="pic5" class="zoom_plus">
<a class="plus" title="" rel="group" href="{{ $product->image_big5 }}">
<span>&nbsp;</span>
</a>
</li>

</ul>
</div
<!--End of zoom-->
<div id="color" class="color">
&nbsp;
</div>


<div class="more-views flexslider" style="width:250px;">
<ul class="slides">
<li>
<a href="javascript:void(0);" onclick="updatePic('images/image/5/t51p_schraeg.jpg','','','1');" >
{{ HTML::image($product->image_small1) }}
</a>
</li>


<li>
<a href="javascript:void(0);" onclick="updatePic('images/image/5/t51p_seite.jpg','','','2');" >
{{ HTML::image($product->image_small2) }}
</a>
</li>


<li>
<a href="javascript:void(0);" onclick="updatePic('images/image/5/t51p_liegend_1.jpg','','','3');" >
{{ HTML::image($product->image_small3) }}
</a>
</li>


<li>
<a href="javascript:void(0);" onclick="updatePic('images/image/5/t51p_vorne.jpg','','','4');" >
{{ HTML::image($product->image_small4) }}
</a>
</li>
<li>
<a href="javascript:void(0);" onclick="updatePic('images/image/5/t51p_vorne.jpg','','','5');" >
{{ HTML::image($product->image_small5) }}
</a>
</li>




</ul>
</div>
</div><!--end of imagezoom-->
</div><!--img box-->
</div>
<div class="links">
<!--
<a href="#">اضافه به لیست مورد علاقه</a>
<a href="#">معرفی به دوستان</a>
-->
</div>
</div>