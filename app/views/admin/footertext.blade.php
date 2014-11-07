{{ HTML::script('ckeditor/ckeditor.js') }}

{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}


<div>
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{Lang::get('persian.footertext-management', array(), 'fa')}}
            <small>
			{{Lang::get('persian.footertext', array(), 'fa')}}
            </small>
    	</h1>


<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.footertext-management', array(), 'fa')}}
  </li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.footertext', array(), 'fa') }}
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
  {{Form::open(array('url' => 'admin/footer', 'method' => 'POST'))}}

<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">




<div class="row">
  <div class="col-md-10" style="float:right;">
    <div class="form-group">
      {{ Form::textarea('text' ,$text->body, array('class' => 'form-control')) }}
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
</div>


<script>
CKEDITOR.replace( 'text', {
    filebrowserBrowseUrl : '/shopping/public/elfinder/elfinder.html', 
    uiColor : '#9AB8F3',
});
</script>