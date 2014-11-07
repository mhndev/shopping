<div>
<div class="row" style="float:right;">
<div class="col-lg-12">
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{Lang::get('persian.news-management', array(), 'fa')}}
            <small>
			{{Lang::get('persian.show-news', array(), 'fa')}}
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

  <li class="active" style="width:200px;">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.show-news', array(), 'fa') }}
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






<div class="panel panel-default">
  <div class="panel-heading">{{ $model->title }}</div>
  <div class="panel-body">
    <p>{{ $model->summary }}</p>
    <p>{{ $model->news }}</p>
  </div>
</div>



<div style="float:right; margin-right:200px;">{{ Lang::get('persian.image_path1' , array() , 'fa') }}</div>
<div style="float:right; border:1px solid gray; margin-right:20px">
{{ HTML::image($model->image_path1) }}
</div>

<div style="float:right; margin-right:20px;">{{ Lang::get('persian.image_path2' , array() , 'fa') }}</div>
<div style="float:right; border:1px solid gray; margin-right:20px;">
{{ HTML::image($model->image_path2) }}
</div>

