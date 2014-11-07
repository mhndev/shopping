{{ HTML::script('ckeditor/ckeditor.js') }}
{{ HTML::script('elfinder/js/elfinder.min.js') }}
{{ HTML::style('elfinder/css/theme.css') }}
{{ HTML::style('elfinder/css/elfinder.min.css') }}
{{ HTML::style('colorbox.css') }}
{{ HTML::style('css/product-create.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}

<div class="row">
          <div class="col-lg-12">
            <h1>{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}<small>
            {{ Lang::get('persian.edit-menu' , array() , 'fa') }} </small></h1>

<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.menus-management', array(), 'fa')}}
  </li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.edit-menu', array(), 'fa') }}
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



{{ Form::model($model, array('url' => array('admin/menus', $model->id), 'method' => 'PUT')) }}
<div class="col-lg-12 col-md-4 col-sm-6">
	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{Form::label('name', Lang::get('persian.name' ,array() , 'fa')	)}}
						{{Form::text('name',Input::old('name'),array('class' => 'form-control'))}}
					</div>
			</div>
	</div>


	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{Form::label('faname', Lang::get('persian.faname' ,array() , 'fa')	)}}
						{{Form::text('faname',Input::old('faname'),array('class' => 'form-control'))}}
					</div>
			</div>
	</div>


<div class="row">
				<div class="col-md-4" style="float:right;">
				<div class="form-group">
		{{ Form::label('faname' ,Lang::get('persian.enableDisable', array(), 'fa')) }}			
			{{ Form::select('enable', 
			array(
			     '0' => Lang::get('persian.disable' , array() , 'fa'),
			 	 '1' => Lang::get('persian.enable' , array() , 'fa')
			 	 ) , null , array('class'=>'formDropdown')) }}
		</div>
	</div>
</div>






	<div class="row">
		<div class="col-md-10" style="float:right;">
		<div class="form-group">
			{{ Form::label('body' ,Lang::get('persian.body', array(), 'fa')) }}
			{{ Form::textarea('body' ,Input::old('body'), array('class' => 'form-control')) }}
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


<script>
CKEDITOR.replace( 'body', {
    filebrowserBrowseUrl : '/shopping/public/elfinder/elfinder.html', 
    uiColor : '#9AB8F3',
});
</script>




{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}
