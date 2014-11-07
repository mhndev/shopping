{{ HTML::style('css/product-create.css')}}

<div class="row">
          <div class="col-lg-12">
            <h1>{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}<small>
            {{ Lang::get('persian.edit-post' , array() , 'fa') }} </small></h1>

<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>
              <li class="active" style="width:120px;"><i class="fa fa-bar-chart-o"></i>
            {{ Lang::get('persian.site-settings' , array() , 'fa') }}
              </li>
  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.site-disable', array(), 'fa')}}
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



	{{Form::open(array('url' => 'admin/sitedisable', 'method' => 'POST'))}}
<div class="col-lg-12 col-md-4 col-sm-6">
	<div class="row">
        	<div class="col-md-4" style="float:right">
	        		<div class="form-group">
						{{ Form::select('disable', 
							array(
							     '0' => Lang::get('persian.disable' , array() , 'fa'),
							 	 '1' => Lang::get('persian.enable' , array() , 'fa')
							 	 ) , $record->disable ,array('class'=>'formDropdown')) }}
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
