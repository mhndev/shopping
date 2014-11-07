
{{ HTML::style('css/style2.css') }}
{{ HTML::style('css/zero-style.css') }}
{{ HTML::style('css/magento.css') }}
{{ HTML::script("jquery-ui.js") }}
{{ HTML::style("jquery-ui.css") }}

<div class="middle-container" style="height:750px;">
    <div class="middle col-2-left-layout">

      <!-- ********************************************************************-->
      <!--
      <div id="right-table">
          <div class="table-header">
              <h2>جستجو</h2>
          </div>
            <div class="price">
                <h2>رنج قیمت</h2>
                <div class="clearfix"></div>
                <div id="slider-range"></div>



                <input type="text" id="amount" readonly style="background:initial; width:180px; margin-right:30px;">

            </div>
          <span class="border" ></span>
            <div  style="padding:5px;">
                <form name="form" action="post" method="post">
                    <ul>
                        <div class="list">
                           <h2>ویژگی ها</h2>
                        </div>

                        <li><input style="margin-top:2px" type="checkbox" class="checkbox" />
                            <p  class="checkbox-p">حافظه جانبی</p></li>
                        <li><input style="margin-top:2px" type="checkbox" class="checkbox" />
                            <p class="checkbox-p">رنگ</p></li>
                        <li><input style="margin-top:2px" type="checkbox" class="checkbox" />
                            <p class="checkbox-p">سالم</p></li>


                        <span class="border"></span>
                    </ul>
                </form>
             </div>
      </div><!-- End of right-table -->

      <!-- ********************************************************************-->
     <!-- <div id="left-table-top" style="margin-right:300px;">-->
      <div id="left-table-top">

      </div><!-- End of left-table-top -->

         
      <!-- ********************************************************************-->
      <div id="left-table">
           @foreach ($results as $product)
                <div class="item" style="background-color:white">
                    <div class="top">
                        <a href="{{ URL::to('products/show/'.$product->id) }}">
                         
                           {{ HTML::image($product->image_products) }}
                        </a>
                    </div>
                    <div class="bottom">
                        <h1  style="height:23px;"> {{ $product->name }}</h1>
                        <div class="addtocard">
                            <h3>{{ $product->price}}</h3>
                            <a href="#">
                                {{ HTML::image('images/addtocart.png') }}
                            </a>
                        </div>
                    </div>
                    
                </div>
           @endforeach
        </div><!-- End of left-table-->
        <!-- ********************************************************************-->

    </div><!-- End of middle col-2-left-layout-->

<div style="float:right; margin-right:300px; width:200px;">
  {{ $results->links() }}
</div>


</div><!-- End of middle-container-->

   <!-- ********************************************************************-->

<script>
  $html = '';
  $html += "<form action='#' style='float:right;margin-right:10px;'><fieldset>";  
var params = {{ $params }};
console.log(params);
for(param in params){
  var options = params[param].split(",");
  $html += "<label for='"+ param +"'>"+param+"</label>";
  $html += "<select name='"+param+"' id='"+param+"'>";
  for(i=0;i<options.length;i++)
  $html += "<option>"+options[i]+"</option>";
  $html += "</select>"; 
}

$html +='</fieldset></form>';

//document.getElementById('left-table-top').innerHTML = $html;
</script>

   <!-- ********************************************************************-->


<script>
  jQuery(function(){
    jQuery( "#slider-range" ).slider({
      range: true,
      min: 10000,
      max: 30000000,
      values: [ 10000, 30000000 ],
      slide: function( event, ui ) {
        jQuery( "#amount" ).val( ui.values[ 0 ] + " ﷼ الی " + ui.values[ 1 ]+" ﷼" );
        jQuery( "#pricerange" ).val( ui.values[ 0 ] + "-" + ui.values[ 1 ] );
      }
    });
    jQuery( "#amount" ).val( jQuery( "#slider-range" ).slider( "values", 0 ) +
    "﷼ الی" + jQuery( "#slider-range" ).slider( "values", 1 )+"﷼" );
  });
</script>