<div class="row">
          <div class="col-lg-12">
            <h1>
              {{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              <small>
                {{ Lang::get('persian.changepass' , array() , 'fa') }}
              </small></h1>
            <ol class="breadcrumb">
              <li style="width150px;"><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i> 
            {{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active" style="width:120px;"><i class="fa fa-bar-chart-o"></i>
            {{ Lang::get('persian.site-settings' , array() , 'fa') }}
              </li>
              <li class="active" style="width:150px;"><i class="fa fa-bar-chart-o"></i>
              {{ Lang::get('persian.changepass' , array() , 'fa') }}
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
        <div class="row col-md-6" style="float:right">
{{Form::open(array('url' => 'admin/changepass'))}}
	<div class="row">
        		<div class="col-md-6" style="float:right" >
	        		<div class="form-group">
						{{Form::label('oldPass', 'رمز فعلی'	)}}
						{{Form::text('oldPass','',array('class' => 'form-control'))}}
					</div>
				</div>
				<div class="col-md-6" style="float:right">
					<div class="form-group">
						{{Form::label('newPass', ' رمز جدید')}}
						{{Form::text('newPass','',array('class' => 'form-control'))}}
					</div>
				</div>
			</div>	
	{{ Form::submit('تغییر', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
        </div>