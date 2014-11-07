{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}
{{ HTML::style('css/product-create.css')}}

<div>
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{Lang::get('persian.sliders-management', array(), 'fa')}}
            <small>
			{{Lang::get('persian.add-slider', array(), 'fa')}}
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
	{{ Lang::get('persian.add-slider', array(), 'fa') }}
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
	{{Form::open(array('url' => 'admin/sliders', 'method' => 'POST'))}}

<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">

<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('enable' ,Lang::get('persian.enable', array(), 'fa')) }}
			{{ Form::select('enable', 
			array(
			     '0' => Lang::get('persian.disable' , array() , 'fa'),
			 	 '1' => Lang::get('persian.enable' , array() , 'fa')
			 	 ) , null ,array('class'=>'formDropdown')) }}
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('param1' ,Lang::get('persian.param1', array(), 'fa')) }}
			{{ Form::text('param1' ,'', array('class' => 'form-control'))  }}
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('param2' ,Lang::get('persian.param2', array(), 'fa')) }}
			{{ Form::text('param2' ,'', array('class' => 'form-control'))  }}
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('param3' ,Lang::get('persian.param3', array(), 'fa')) }}
			{{ Form::text('param3' ,'', array('class' => 'form-control'))  }}
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('image' ,Lang::get('persian.image', array(), 'fa') ,
			array(
				'class' => 'popup_selector btn btn-success',
				'data-inputid'=>'fileurl1',
				'style'=>'padding:7px; margin:3px;'
			)) }}

			{{ Form::text('image' ,'', array(
				'id'=>'fileurl1' , 'class'=>'form-control'
			    ))  
			}}
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('left' ,Lang::get('persian.leftDistance', array(), 'fa')) }}
			{{ Form::selectRange('left', 95, 465, 95 , ['class' => 'formDropdown']) }}
		</div>
	</div>
</div>




<div class="row">
	<div class="col-md-4" style="float:right">
	{{
		Form::submit(Lang::get('persian.submit', array(), 'fa'), 
		array(
			'class'=> 'btn btn-primary' , 
			'style'=>'width:100%;margin-bottom:40px; '
			))
	}}
	</div>
</div>

</div>
	{{Form::close()}}
</div>


</div>
</div>




{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}