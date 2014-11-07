<div class="row">
          <div class="col-lg-12">
            <h1>{{ Lang::get('persian.users-management' , array() , 'fa') }}<small>
            {{ Lang::get('persian.pass-reset' , array() , 'fa') }} </small></h1>

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
	{{ Lang::get('persian.pass-reset', array(), 'fa') }}
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


{{ Form::open(array('url'=>array('admin/users/passreset',$user->id) ,  'method' => 'POST' ,'class'=>'form-signup')) }}

<table class="table">
  <tr>
    <td>
      {{ Form::label('password' , Lang::get('persian.password' , array() , 'fa')) }}
    </td>

    <td>
      {{ Form::text('password', null, 
      array('class'=>'input-block-level form-control', 'placeholder'=>'password')) }}
    </td>
  </tr>

  <tr>  
    <td>
      {{ Form::label('password_confirmation' , Lang::get('persian.password_confirmation' , array() , 'fa')) }}  
    </td>
    <td>      
      {{ Form::text('password_confirmation', null, array('class'=>'input-block-level form-control', 'placeholder'=>'confirmation')) }}
    </td>
  </tr>

      <td>
      {{ Form::submit(
        Lang::get('persian.submit' , array() , 'fa')
        , array('class'=>'btn btn-large btn-primary btn-block'))}}
    </td>

</table>
{{ Form::close() }}
