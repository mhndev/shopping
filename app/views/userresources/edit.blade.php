<div class="row">
          <div class="col-lg-12">
            <h1>{{ Lang::get('persian.users-management' , array() , 'fa') }}<small>
            {{ Lang::get('persian.edit-user' , array() , 'fa') }} </small></h1>

<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashbord')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.users-management', array(), 'fa')}}
  </li>

  <li class="active">
  	<i class="fa fa-bar-chart-o"></i>
	{{ Lang::get('persian.edit-user', array(), 'fa') }}
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






{{ Form::model($model, array('url' => array('admin/users', $model->id), 'method' => 'PUT')) }}
<div class="col-lg-12 col-md-4 col-sm-6">


  <div class="row">
          <div class="col-md-4" style="float:right">
              <div class="form-group">
            {{Form::label('firstname', Lang::get('persian.firstName' ,array() , 'fa')  )}}
            {{Form::text('firstname',Input::old('title'),array('class' => 'form-control'))}}
          </div>
      </div>
  </div>


  <div class="row">
          <div class="col-md-4" style="float:right">
              <div class="form-group">
            {{Form::label('lastname', Lang::get('persian.lastName' ,array() , 'fa')  )}}
            {{Form::text('lastname',Input::old('title'),array('class' => 'form-control'))}}
          </div>
      </div>
  </div>  



  <div class="row">
          <div class="col-md-4" style="float:right">
              <div class="form-group">
            {{Form::label('email', Lang::get('persian.email' ,array() , 'fa')  )}}
            {{Form::text('email',Input::old('email'),array('class' => 'form-control'))}}
          </div>
      </div>
  </div>


  <div class="row">
          <div class="col-md-4" style="float:right">
              <div class="form-group">
            {{Form::label('enable', Lang::get('persian.enableDisable' ,array() , 'fa')  )}}

<?php
$vals = array('0' => Lang::get('persian.disable' , array() , 'fa'),
              '1' => Lang::get('persian.enable' , array() , 'fa')
              )
?>

{{ Form::select('enable', $vals, Input::old('enable') , array('class'=>'form-control')) }}

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