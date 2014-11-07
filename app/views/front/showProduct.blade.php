{{ HTML::style('product/css/zero.css') }}
{{ HTML::style('product/css/magento.css') }}
{{ HTML::style('product/css/style.css') }}
{{ HTML::script('product/js/jquery-1.7.1.min.js') }}
{{ HTML::script('product/js/fancybox/jquery.fancybox-1.3.0.pack.js') }}
{{ HTML::script('product/js/custom.js') }}
<div class="wrapper">
    <div class="header">
        <div id="typo3_head">
        <div class="middle-container" style="width:950px;">
            @include('partials.front-productSlider')
            @include('partials.front-productInfo')
        </div>
        <div class="col-right side-col">
            <div class="vertnav-container">
            &nbsp;
            </div>         
        </div>
        <div class="clearfix"></div>
        <hr/>
        <div id="sameProducts">
<!--             @include('partials.front-sampleProduct')

        <div class="clearfix"></div>
        <hr/>           -->  
        
            {{ HTML::image('images/button.png' , '' , array('style'=>'float:right')) }}
            
            <div class="details" style="clear:both; float:right; padding:10px;">
                {{ $product->description }}
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <!-- technical specs -->
    @include('partials.front-technicalSpecs')
     <div class="clearfix"></div>
    <hr>
    @include('partials.front-userComments')
    @include('partials.front-putComment')

</div>
</div>
</div>


<script type="text/javascript">
    function searchFieldFocus()
    {
        jQuery('#productSearchString').focusin(function(){
            if(jQuery(this).val() == 'search...')
            {
                jQuery(this).val('');

            }
        })
        .focusout(function(){
            if(jQuery(this).val() == '')
            {
                jQuery(this).val('search...');
            }
        });
    }

</script>