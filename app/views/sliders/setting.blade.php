{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}
{{ HTML::style('css/product-create.css')}}

<div>
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{Lang::get('persian.sliders-management', array(), 'fa')}}
            <small>
			{{Lang::get('persian.slider-setting', array(), 'fa')}}
            </small>
    	</h1>


<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.sliders-management', array(), 'fa')}}
  </li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.slider-setting', array(), 'fa') }}
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
  {{Form::open(array('url' => 'admin/slider/setting', 'method' => 'POST'))}}

<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">


  <div class="col-md-4" style="float:right;">
    <div class="form-group">
      {{ Form::label('speed' ,Lang::get('persian.speedChange', array(), 'fa')) }}
      {{ Form::selectRange('speed', 100, 10000, $setting->speed , ['class' => 'formDropdown']) }}
    </div>
  </div>

<div class="col-md-4" style="float:right;">
    <div class="form-group">
        {{ Form::label('stophover' ,Lang::get('persian.stophover' ,array() , 'fa')) }}
        {{ Form::select('stophover', 
        array(
             'on' => 'on',
           'off' => 'off'
           ) , $setting->stophover ,array('class'=>'formDropdown')) }}
    </div>
</div>


<div class="col-md-4" style="float:right;">
    <div class="form-group">
        {{ Form::label('textanim' ,Lang::get('persian.ease' ,array() , 'fa')) }}
        {{ Form::select('textanim', 
        array(
             'linear' => 'linear',
             'swing' => 'swing',
             'easeInQuad' => 'easeInQuad',
             'easeOutQuad' => 'easeOutQuad',
             'easeInOutQuad' => 'easeInOutQuad',
             'easeInCubic' => 'easeInCubic',
             'easeOutCubic' => 'easeOutCubic',
             'easeInOutCubic' => 'easeInOutCubic',
             'easeInQuart' => 'easeInQuart',
             'easeOutQuart' => 'easeOutQuart',
             'easeInOutQuart' => 'easeInOutQuart',
             'easeInQuint' => 'easeInQuint',
             'easeOutQuint' => 'easeOutQuint',
             'easeInOutQuint' => 'easeInOutQuint',
             'easeInExpo' => 'easeInExpo',
             'easeOutExpo' => 'easeOutExpo',
             'easeInOutExpo' => 'easeInOutExpo',
             'easeInSine' => 'easeInSine',
             'easeOutSine' => 'easeOutSine',
             'easeInOutSine' => 'easeInOutSine',
             'easeInCirc' => 'easeInCirc',
             'easeOutCirc' => 'easeOutCirc',
             'easeInOutCirc' => 'easeInOutCirc',
             'easeInElastic' => 'easeInElastic',
             'easeOutElastic' => 'easeOutElastic',
             'easeInOutElastic' => 'easeInOutElastic',
             'easeInBack' => 'easeInBack',
             'easeOutBack' => 'easeOutBack',
             'easeInOutBack' => 'easeInOutBack',
             'easeInBounce' => 'easeInBounce',
             'easeOutBounce' => 'easeOutBounce',
             'easeInOutBounce' => 'easeInOutBounce'
           ) 


           , $setting->textanim ,array('class'=>'formDropdown')) }}
    </div>
</div>







<div class="row">
  <div class="col-md-2" style="float:right">
  {{
    Form::submit(Lang::get('persian.submit', array(), 'fa'), 
    array(
      'class'=> 'btn btn-primary' , 
      'style'=>'width:100%;margin-bottom:40px; margin-right:100px; '
      ))
  }}
  </div>
</div>

</div>
  {{Form::close()}}

</div>

</div>
