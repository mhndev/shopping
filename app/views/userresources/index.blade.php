<div class="row">
          <div class="col-lg-12">
            <h1>
				{{ Lang::get('persian.users-management' , array() , 'fa') }}
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.users-management' , array() , 'fa') }}
              </li>
              <li style="width:120px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.usersList' , array() , 'fa') }}
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


<div class="row" style="margin-bottom:40px; margin-right:15px;">
		<div class="col-md-2" style="float:right;">
			{{HTML::link('admin/users/create',
			Lang::get('persian.add-user' , array() , 'fa')
			, array('class' => 'btn btn-info'))}}
		</div>
	</div>




        <div class="row">
        	<div class="col-lg-12" style="float:right;">
<div style="overflow:auto;">
<table class="table table-bordered table-hover table-striped tablesorter"style="direction:rtl;  ">
 	<thead>
		<tr>
			<th>
			{{ Lang::get('persian.id' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.firstName' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.lastName' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.email' , array() , 'fa') }}
			</th>

			<th>
				{{ Lang::get('persian.mobile' , array() , 'fa') }}
			</th>			

			<th style="width:300px">
				{{ Lang::get('persian.lastLogin' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.enableDisable' , array() , 'fa') }}
			</th>



			<th>
				Actions
			</th>						
		</tr>
	</thead>
	<tbody>


@foreach ($users as $user)
<tr>
<td>{{$user->id }}</td>
<td>{{$user->firstname }}</td>
<td>{{$user->lastname }}</td>
<td>{{$user->email }}</td>
<td>{{$user->mobile }}</td>
<td>{{Shamsi::toJalali($user->lastlogin) }}</td>
<td>

{{Form::open(array('url' => array('admin/users/changestate', $user->id), 
'method' => 'GET')) }}
@if ($user->enable !== '0')
{{ Form::submit(Lang::get("persian.enable" , array() , "fa"), array('class' => 'btn btn-success'))}}
@else
{{ Form::submit(Lang::get("persian.disable" , array() , "fa"), array('class' => 'btn btn-danger')) }}
@endif

{{ Form::close() }}
</td>
<td>
<div style="float:right">
<a class="btn btn-small btn-info" href="{{ URL::to('admin/users/'.$user->id.'/edit')}}">
{{ Lang::get('persian.edit' , array() , 'fa') }}
</a>
</div>	

<div style="float:right;margin-right:3px;">
<a class="btn btn-small btn-primary" href="{{ URL::to('admin/users/passreset/'.$user->id)}}">
{{ Lang::get('persian.passwordReset' , array() , 'fa') }}
</a>
</div>	


<div style="float:right">
{{ Form::open(array('url' => 'admin/users/' . $user->id)) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit(Lang::get("persian.delete" , array() , "fa"), array('class' => 'btn btn-warning')) }}
{{ Form::close() }}
</div>
</td>
</tr>
@endforeach


		
	</tbody>
</table>

</div></div>

</div></div>
</div>
