
<div class="row">
          <div class="col-lg-12">
            <h1>
				{{ Lang::get('persian.comments-management' , array() , 'fa') }}
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.comments-management' , array() , 'fa') }}
              </li>
              <li style="width:130px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.comment-list' , array() , 'fa') }}
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




        <div class="row">
        	<div class="col-lg-12" style="float:right;">
<div class="table-responsive col-lg-12 col-md-4 col-sm-6" style="float:right;">

<table class="table table-bordered table-hover table-striped tablesorter"style="direction:rtl">
 	<thead>
		<tr>
			<th>{{ Lang::get('persian.name' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.mobile' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.email' , array() , 'fa') }}</th>
			<th style="width:300px;">{{ Lang::get('persian.text' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.plus' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.minus' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.enableDisable' , array() , 'fa') }}</th>
			<th style="width:320px;">Actions</th>						
		</tr>
	</thead>
	<tbody>



@foreach ($items as $item)
<tr>
<td>{{ $item->name }}</td>
<td>{{ $item->mobile }}</td>
<td>{{ $item->email }}</td>
<td>{{ $item->text }}</td>
<td>{{ $item->plus }}</td>
<td>{{ $item->minus }}</td>
<td>

{{Form::open(array('url' => array('admin/'.$item->product_id.'/comments/changestate', $item->id), 
'method' => 'GET')) }}
@if ($item->publish !== '0')
{{ Form::submit(Lang::get("persian.enable" , array() , "fa"), array('class' => 'btn btn-success'))}}
@else
{{ Form::submit(Lang::get("persian.disable" , array() , "fa"), array('class' => 'btn btn-danger')) }}
@endif

{{ Form::close() }}
</td>
<td>
<div style="float:right">

<a class="btn btn-small btn-info" href="{{ URL::to('admin/'.$item->product_id.'/comments/'.$item->id.'/edit')}}">
{{ Lang::get('persian.edit' , array() , 'fa') }}
</a>
</div>	

{{ Form::open(array('url' => 'admin/'.$item->product_id.'/comments/' . $item->id , 'style'=>'width:212px')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit(Lang::get("persian.delete" , array() , "fa"), array('class' => 'btn btn-warning')) }}
{{ Form::close() }}
</td>
</tr>
@endforeach


		
	</tbody>
</table>

</div></div>

</div></div>
</div>



{{ $items->links() }}
