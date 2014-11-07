<div class="row">
          <div class="col-lg-12">
            <h1>{{ Lang::get('persian.users-management' , array() , 'fa') }}<small>
            {{ Lang::get('persian.add-user' , array() , 'fa') }} </small></h1>

<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.users-management', array(), 'fa')}}
  </li>

  <li class="active" style="width:200px;">
  	<i class="fa fa-bar-chart-o" ></i>
	{{ Lang::get('persian.add-user', array(), 'fa') }}
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







	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>




{{ Form::open(array('url'=>'admin/users',  'method' => 'POST' ,'class'=>'form-signup')) }}
	<h2 class="form-signup-heading">
		
		{{ Lang::get('persian.add-user' , array() , 'fa') }}
	</h2>


<table class="table">
	<tr>
		<td>
			{{ Form::label('firstName' , Lang::get('persian.firstName' , array() , 'fa')) }}
		</td>

		<td>
			{{ Form::text('firstname', null, 
			array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
		</td>
	</tr>

	<tr>	
		<td>
			{{ Form::label('lastName' , Lang::get('persian.lastName' , array() , 'fa')) }}	
		</td>
		<td>			
			{{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
		</td>
	</tr>

	<tr>
		<td>
			{{ Form::label('email' , Lang::get('persian.email' , array() , 'fa')) }}
		</td>
		<td>			
			{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
		</td>
	</tr>

	<tr>
		<td>
			{{ Form::label('mobile' , Lang::get('persian.mobile' , array() , 'fa')) }}
		</td>
		<td>			
			{{ Form::text('mobile', null, array('class'=>'input-block-level', 'placeholder'=>'mobile')) }}
		</td>
	</tr>


	<tr>
		<td>
			{{ Form::label('enable' , Lang::get('persian.enableDisable' , array() , 'fa')) }}
		</td>
		<td>			
			{{ Form::select('enable', 
			array(
			     '0' => Lang::get('persian.disable' , array() , 'fa'),
			 	 '1' => Lang::get('persian.enable' , array() , 'fa')
			 	 )) }}
		</td>
	</tr>	

	<tr>
		<td>
			{{ Form::label('password' , Lang::get('persian.password' , array() , 'fa')) }}
		</td>
		<td>			
			{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		</td>
	</tr>

	<tr>
		<td>
			{{ Form::label('password_confirmation' , Lang::get('persian.password_confirmation' , array() , 'fa')) }}
		</td>
		<td>
			{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
		</td>
	</tr>
		<td>
			{{ Form::submit(
				Lang::get('persian.submit' , array() , 'fa')
				, array('class'=>'btn btn-large btn-primary btn-block'))}}
		</td>

</table>
{{ Form::close() }}