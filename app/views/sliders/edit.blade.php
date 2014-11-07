{{ HTML::script('elfinder/js/elfinder.min.js') }}
{{ HTML::style('elfinder/css/theme.css') }}
{{ HTML::style('elfinder/css/elfinder.min.css') }}
{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}
{{ HTML::style('css/product-create.css')}}

<div class="row">
          <div class="col-lg-12">
            <h1>{{ Lang::get('persian.news-management' , array() , 'fa') }}<small>
            {{ Lang::get('persian.edit-news' , array() , 'fa') }} </small></h1>

<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.news-management', array(), 'fa')}}
  </li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.edit-news', array(), 'fa') }}
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



{{ Form::model($model, array('url' => array('admin/sliders', $model->id), 'method' => 'PUT')) }}
<div class="col-lg-12 col-md-4 col-sm-6">
	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{Form::label('param1', Lang::get('persian.param1' ,array() , 'fa')	)}}
						{{Form::text('param1',Input::old('param1'),array('class' => 'form-control'))}}
					</div>
			</div>
	</div>


	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{Form::label('param2', Lang::get('persian.param2' ,array() , 'fa')	)}}
						{{Form::text('param2',Input::old('param2'),array('class' => 'form-control'))}}
					</div>
			</div>
	</div>


	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{Form::label('param3', Lang::get('persian.param3' ,array() , 'fa')	)}}
						{{Form::text('param3',Input::old('param3'),array('class' => 'form-control'))}}
					</div>
			</div>
	</div>



	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{
							Form::label('image',
							Lang::get('persian.image' ,array() , 'fa') , 
							array('class' => 'popup_selector btn btn-success',
							'data-inputid'=>'fileurl1',
							'style'=>'padding:7px; margin:3px;')	)
						}}

						{{
							Form::text('image',Input::old('image'),
								    array('class' => 'form-control','id'=>'fileurl1'))
						}}
					</div>
			</div>
	</div>


	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{Form::label('left', Lang::get('persian.leftDistance' ,array() , 'fa')	)}}
{{ Form::selectRange('left', 95, 465, Input::old('left') , ['class' => 'formDropdown']) }}
					</div>
			</div>
	</div>



		<div class="row">
			<div class="col-md-4" style="float:right">
				{{Form::submit(Lang::get('persian.submit' ,array() , 'fa') , array('class'=> 'btn btn-primary' , 'style'=>'width:100%;margin-bottom:40px;'))}}
			</div>
		</div>
</div>
{{Form::close()}}




{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}
