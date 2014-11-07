
<div class="row">
          <div class="col-lg-12">
            <h1>
				{{ Lang::get('persian.menus-management' , array() , 'fa') }}
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.menus-management' , array() , 'fa') }}
              </li>
              <li style="width:130px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.menus-list' , array() , 'fa') }}
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
			{{HTML::link('admin/menus/create',
			Lang::get('persian.add-menu' , array() , 'fa')
			, array('class' => 'btn btn-info'))}}
		</div>
	</div>     



<div class="row">
<div class="col-lg-12" style="float:right;">
	<div class="table-responsive col-lg-12 col-md-4 col-sm-6" style="float:right;">

		<table class="table table-bordered table-hover table-striped tablesorter"style="direction:rtl">
		 	<thead>
				<tr>
					<th>
					{{ Lang::get('persian.name' , array() , 'fa') }}
					</th>


					<th>
						{{ Lang::get('persian.faname' , array() , 'fa') }}
					</th>

					<th>
						{{ Lang::get('persian.enableDisable' , array() , 'fa') }}
					</th>


					<th style="width:320px;">
						Actions
					</th>		

				</tr>


	@foreach ($menus as $menu)
<tr>
<td>{{$menu->name }}</td>
<td>{{$menu->faname }}</td>
<td>

{{Form::open(array('url' => array('admin/menus/changestate', $menu->id), 
'method' => 'GET')) }}
@if ($menu->enable !== '0')
{{ Form::submit(Lang::get("persian.enable" , array() , "fa"), array('class' => 'btn btn-success'))}}
@else
{{ Form::submit(Lang::get("persian.disable" , array() , "fa"), array('class' => 'btn btn-danger')) }}
@endif

{{ Form::close() }}
</td>


<td>

{{ Form::open(array('url' => 'admin/menus/' . $menu->id , 'style'=>'width:212px')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit(Lang::get("persian.delete" , array() , "fa"), array('class' => 'btn btn-warning')) }}

<a class="btn btn-small btn-info" href="{{ URL::to('admin/menus/'.$menu->id.'/edit')}}">
{{ Lang::get('persian.edit' , array() , 'fa') }}
</a>

{{ Form::close() }}
</td>
</tr>
@endforeach


		
	</tbody>
</table>

</div></div>

</div></div>
</div>



{{ $menus->links() }}
			