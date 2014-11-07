{{ HTML::script('ckeditor/ckeditor.js') }}

{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}


<div>
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{Lang::get('persian.news-management', array(), 'fa')}}
            <small>
			{{Lang::get('persian.add-news', array(), 'fa')}}
            </small>
    	</h1>


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
	{{ Lang::get('persian.add-news', array(), 'fa') }}
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
	{{Form::open(array('url' => 'admin/news', 'method' => 'POST'))}}

<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">

<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('title' ,Lang::get('persian.title', array(), 'fa')) }}
			{{ Form::text('title' ,'', array('class' => 'form-control'))  }}
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('summary' ,Lang::get('persian.summary', array(), 'fa')) }}
			{{ Form::text('summary' ,'', array('class' => 'form-control'))  }}
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('image_path1' ,Lang::get('persian.image_path1', array(), 'fa') ,
			array(
				'class' => 'popup_selector btn btn-success',
				'data-inputid'=>'fileurl1',
				'style'=>'padding:7px; margin:3px;'
			)) }}

			{{ Form::text('image_path1' ,'', array(
				'id'=>'fileurl1' , 'class'=>'form-control'
			    ))  
			}}
		</div>
	</div>
</div>




<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('image_path2' ,Lang::get('persian.image_path2', array(), 'fa') ,
			array(
				'class' => 'popup_selector btn btn-success',
				'data-inputid'=>'fileurl2',
				'style'=>'padding:7px; margin:3px;'
			)) }}

			{{ Form::text('image_path2' ,'', array(
				'id'=>'fileurl2' , 'class'=>'form-control'
			    ))  
			}}
		</div>
	</div>
</div>





<div class="row">
	<div class="col-md-10" style="float:right;">
		<div class="form-group">
			{{ Form::label('news' ,Lang::get('persian.news', array(), 'fa')) }}
			{{ Form::textarea('news' ,'', array('class' => 'form-control')) }}
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


<script>
CKEDITOR.replace( 'news', {
    filebrowserBrowseUrl : '/shopping/public/elfinder/elfinder.html', 
    uiColor : '#9AB8F3',
});
</script>



{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}