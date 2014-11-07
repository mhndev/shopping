
{{ HTML::style('css/product-create.css') }}
{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}


<div class="row" style="float:right;">
<div class="col-lg-12">
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{ Lang::get('persian.products-management', array(), 'fa')}}
            <small>
            {{ Lang::get('persian.add-product', array(), 'fa') }}
            </small>
        </h1>

        <ol class="breadcrumb">

          <li><a href="{{URL::to('admin/dashboard')}}">
            <i class="fa fa-dashboard"></i> 
            {{ Lang::get('persian.products-management', array(), 'fa') }}
          </a></li>

          <li class="active">
            <i class="fa fa-dashboard"></i>
            {{ Lang::get('persian.add-product', array(), 'fa')  }}
          </li>

          <li class="active">
            <i class="fa fa-dashboard"></i>
            {{ Lang::get('persian.add-category', array(), 'fa') }}
          </li>

        </ol>
        @if(Session::has('message'))
            <div class="alert alert-info alert-dismissable">
                {{ Session::get('message') }}
                <br>
            </div>
        @endif
    </div>
</div><!-- /.row -->





<div class="rowText">
    {{Form::open(array('url' => 'admin/'.$id.'/products', 'method' => 'POST'))}}
                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('name' ,Lang::get('persian.name' ,array() , 'fa')) }}
                        {{ Form::text('name' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('persianName' ,Lang::get('persian.persianName' ,array() , 'fa')) }}
                        {{ Form::text('persianName' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>


                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('company' ,Lang::get('persian.company' ,array() , 'fa')) }}
                        {{ Form::text('company' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('price' ,Lang::get('persian.price' ,array() , 'fa')) }}
                        {{ Form::text('price' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('deals' ,Lang::get('persian.deals' ,array() , 'fa')) }}
                        {{ Form::text('deals' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('special' ,Lang::get('persian.special' ,array() , 'fa')) }}
                        {{ Form::select('special', 
                        array(
                             '0' => Lang::get('persian.disable' , array() , 'fa'),
                           '1' => Lang::get('persian.enable' , array() , 'fa')
                           ) , null ,array('class'=>'formDropdown')) }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('active' ,Lang::get('persian.active' ,array() , 'fa')) }}
                        {{ Form::select('active', 
                        array(
                             '0' => Lang::get('persian.disable' , array() , 'fa'),
                           '1' => Lang::get('persian.enable' , array() , 'fa')
                           ) , null ,array('class'=>'formDropdown')) }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('guarantee' ,Lang::get('persian.guarantee' ,array() , 'fa')) }}
                        {{ Form::text('guarantee' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>

                <div class="col-md-5" style="float:right;">
                    <div class="form-group">
                        {{ Form::label('serial' ,Lang::get('persian.serial' ,array() , 'fa')) }}
                        {{ Form::text('serial' ,'', array('class'=>'form-control'))  }}
                    </div>
                </div>

 <!-- <div id="inputsFeatures" class="col-lg-12 col-md-4 col-sm-6" style="float:right;"></div>-->
  <div id="inputsTecdecs" class="col-lg-12 col-md-4 col-sm-6" style="float:right;">
  </div>        
</div>









<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">
  <div class="rowText">
  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ Form::label('image_showProduct' , Lang::get('persian.image_showProduct', array(), 'fa') , array('id'=>'select-button1' , 'class'=>'popup_selector btn btn-success' ,
       'data-inputid'=>'fileurl1' , 'style'=>'padding:7px; margin:3px;')) }}
      {{ Form::text('image_showProduct' , '' , array('id'=>'fileurl1','class'=>'form-control')) }}
    </div>
</div>


  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_products' , Lang::get('persian.image_products', array(), 'fa') ,array('id'=>'select-button2' , 'class'=>'popup_selector btn btn-success',
         'data-inputid'=>'fileurl2', 'style'=>'padding:7px; margin:3px;'))
      }}

      {{ Form::text('image_products' , '' ,
       array('id'=>'fileurl2','class'=>'form-control')) }}
    </div>
</div>



  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_windows' , Lang::get('persian.image_windows', array(), 'fa') ,array('id'=>'select-button2' , 'class'=>'popup_selector btn btn-success',
         'data-inputid'=>'fileurl22', 'style'=>'padding:7px; margin:3px;'))
      }}

      {{ Form::text('image_windows' , '' ,
       array('id'=>'fileurl22','class'=>'form-control')) }}
    </div>
  </div>


  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_big1' , Lang::get('persian.image_big1', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl3', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_big1' , '' , 
      array('id'=>'fileurl3','class'=>'form-control')) }}
    </div>
  </div>



  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_big2' , Lang::get('persian.image_big2', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl4', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_big2' , '' , 
      array('id'=>'fileurl4','class'=>'form-control')) }}
    </div>
  </div>




  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_big3' , Lang::get('persian.image_big3', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl5', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_big3' , '' , 
      array('id'=>'fileurl5','class'=>'form-control')) }}
    </div>
  </div>





  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_big4' , Lang::get('persian.image_big4', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl6', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_big4' , '' , 
      array('id'=>'fileurl6','class'=>'form-control')) }}
    </div>
  </div>




  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_big5' , Lang::get('persian.image_big5', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl7', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_big5' , '' , 
      array('id'=>'fileurl7','class'=>'form-control')) }}
    </div>
  </div>



  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_small1' , Lang::get('persian.image_small1', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl8', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_small1' , '' , 
      array('id'=>'fileurl8','class'=>'form-control')) }}
    </div>
  </div>


  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_small2' , Lang::get('persian.image_small2', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl9', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_small2' , '' , 
      array('id'=>'fileurl9','class'=>'form-control')) }}
    </div>
  </div>


  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_small3' , Lang::get('persian.image_small3', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl10', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_small3' , '' , 
      array('id'=>'fileurl10','class'=>'form-control')) }}
    </div>
  </div>


  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_small4' , Lang::get('persian.image_small4', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl11', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_small4' , '' , 
      array('id'=>'fileurl11','class'=>'form-control')) }}
    </div>
  </div>



  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ 
        Form::label('image_small5' , Lang::get('persian.image_small5', array(), 'fa') , array(
          'id'=>'select-button3' , 
          'class'=>'popup_selector btn btn-success' ,
          'data-inputid'=>'fileurl12', 'style'=>'padding:7px; margin:3px;' )) 
      }}

      {{ Form::text('image_small5' , '' , 
      array('id'=>'fileurl12','class'=>'form-control')) }}
    </div>
  </div>


  <div class="col-md-5" style="float:right;">
    <div class="form-group">
      {{ Form::label('video_path1' , Lang::get('persian.video_path', array(), 'fa') , array('id'=>'select-button4' , 'class'=>'popup_selector btn btn-success' , 
      'data-inputid'=>'fileurl13', 'style'=>'padding:7px; margin:3px;')) }}
      {{ Form::text('video_path1' , '' , array('id'=>'fileurl13','class'=>'form-control')) }}
    </div>
  </div>

</div>
</div>


        








{{ HTML::style('elfinder/css/theme.css') }}
{{ HTML::style('elfinder/css/elfinder.min.css') }}
{{ HTML::style('css/product-create.css') }}
{{ HTML::script('js/libjs/completeform.js') }}



<script type="text/javascript">
var empty = 2;
  if( {{ $tecdec }} !== 'empty')
    features = {{($tecdec)}};
  else
    features = '';

  console.log(features);
  var extraTecdecs = document.getElementById('inputsTecdecs');
  completeForm2(features , extraTecdecs , 'create');
</script>





<!------------------------------------------------------------------------------>


<div class="row">
  <label for="description" style="float:right; margin-right:35px;">
    {{ Lang::get('persian.description' , array() , 'fa') }}
  </label>
</div>
 {{ HTML::script('ckeditor/ckeditor.js') }}
  <div class="col-md-10" style="float:right;">
  <textarea name="description" id="description" rows="10" cols="80">
  </textarea>
</div>



<!------------------------------------------------------------------------------>


<input type="hidden" id="features" name="features" />

<input type="hidden" id="tecdec" name="tecdec" />


<div class="row">
  <div class="col-md-3" style="float:right;margin-top:40px; margin-right:40px; margin-bottom:50px;">
    {{Form::submit(Lang::get('persian.submit', array(), 'fa'), 
                  array('class'=> 'btn btn-primary' , 'onclick'=>'func()'))}}
  </div>
</div>

</div>
    {{Form::close()}}



{{ HTML::script('elfinder/js/elfinder.min.js') }}
<script type="text/javascript">
CKEDITOR.replace( 'description', {
    filebrowserBrowseUrl : "{{ Url::to('admin/elfinder/ckeditor4') }}", 
    uiColor : '#9AB8F3',
});
</script>


<script type="text/javascript">


  function getAllElementsWithAttribute(attribute)
  {
    var matchingElements = [];
    var allElements = document.getElementsByTagName('*');
    for (var i = 0, n = allElements.length; i < n; i++)
    {
      if (allElements[i].getAttribute(attribute))
      {
        // Element exists with attribute. Add to array.
        matchingElements.push(allElements[i]);
      }
    }
    return matchingElements;
  }

  function getFeatures(element , div){
    var features = "{";
    elements = getAllElementsWithAttribute(element);
    console.log(elements);
    for(var i=0;i<elements.length;i++){
      item = elements[i];
        name  = item.name;
        value = item.value;
        features += "\""+name+"\""+":"+"\""+value+"\",";
    }

    features = features.substring(0,features.length-1);
    features += "}"; 
    console.log(features);
    document.getElementById(div).value = features;
  }


function func(){
  getFeatures('element' , 'features');
  getFeatures('technical' , 'tecdec');
}
</script>



</div>
</div>

{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}