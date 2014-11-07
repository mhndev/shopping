
<?php
$extra1 = array('class' => 'btn btn-small btn-primary btn-sm' ,
				'text'  => Lang::get('persian.order-products-show', array(), 'fa'),
				'url'   => array('first'=>'admin/','second'=>'id','third'=>'/sells') );


$extra2 = array('class' => 'btn btn-small btn-info btn-sm' ,
				'text'  => Lang::get('persian.factor', array(), 'fa'),
				'url'   => array('first'=>'admin/orders/','second'=>'id','third'=>'/factor') );

$extras = array( $extra1 , $extra2 );
?>
<div>
	
<div class="row">
          <div class="col-lg-12">

        <h1>{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
            <small>
			{{ Lang::get('persian.order-list', array(), 'fa') }}
            </small>
    	</h1>

            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.orders-management' , array() , 'fa') }}
              </li>
              <li style="width:130px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.order-list' , array() , 'fa') }}
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


<div id="table" style="overflow:auto">
<table class="table table-bordered table-hover table-striped tablesorter">
	<tr>
		@foreach($columns as $column)
			<th style="text-align:center ; margin:10px;">{{Lang::get('persian.'.$column, array(), 'fa');    }}</th>
		@endforeach

		@foreach($columns2 as $column)
			<th style="text-align:center ; margin:10px;">{{Lang::get('persian.'.$column, array(), 'fa');    }}</th>
		@endforeach		

<th style="text-align:center;  margin:10px;">
	{{Lang::get('persian.delete', array(), 'fa');    }}
</th>


		@foreach($extras as $extra)
		<th style="text-align:center;margin:10px;">{{$extra['text']  }}</th>
			</a></td>
		@endforeach		
	</tr>

	@foreach ($items as $item)
		<tr>
			@foreach($columns as $column)
				@if($column != 'created_at')
					<td style="text-align:center;margin:10px;">{{ $item->$column }}</td>

					@else
					<td style="text-align:center;margin:10px;">{{ Shamsi::toJalali($item->$column) }}</td>
				@endif

			@endforeach	
				



	<td>
	{{Form::open(array('url' => array('admin/orders/changepayedstate', $item->id), 
	'method' => 'GET')) }}
	@if ($item->payed !== '0')
		{{ Form::submit(Lang::get("persian.payed" , array() , "fa"), array('class' => 'btn btn-sm btn-success'))}}
	@else
		{{ Form::submit(Lang::get("persian.notpayed" , array() , "fa"), 
		array('class' => 'btn btn-sm  btn-danger')) }}
	@endif

	{{ Form::close() }}
	</td>		


	<td>
	{{Form::open(array('url' => array('admin/orders/changesentstate', $item->id), 
	'method' => 'GET')) }}
	@if ($item->sent !== '0')
		{{ Form::submit(Lang::get("persian.sent" , array() , "fa"), array('class' => 'btn btn-sm btn-success'))}}
	@else
		{{ Form::submit(Lang::get("persian.notsent" , array() , "fa"), 
		array('class' => 'btn btn-sm btn-danger')) }}
	@endif

	{{ Form::close() }}
	</td>

	<td>
	{{Form::open(array('url' => array('admin/orders/changereceivedstate', $item->id), 
	'method' => 'GET')) }}
	@if ($item->received !== '0')
		{{ Form::submit(Lang::get("persian.received" , array() , "fa"), array('class' => 'btn btn-sm btn-success'))}}
	@else
		{{ Form::submit(Lang::get("persian.notreceived" , array() , "fa"), 
		array('class' => 'btn btn-sm btn-danger')) }}
	@endif

	{{ Form::close() }}
	</td>

						



				<td style="text-align:center;margin:10px;">
					{{ Form::open(array('url' => $view . '/'.$item->id)) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit(Lang::get('persian.delete', array(), 'fa'),
						 array('class' => 'btn btn-sm btn-warning')) }}
					{{ Form::close() }}
				</td>

																
				<td>{{ HTML::link('admin/'.$item->id.'/sells' , Lang::get('persian.order-products-show', array(), 'fa') , array('class'=>'btn btn-small btn-primary btn-sm')) }}
				</td>

				<td>{{ HTML::link('admin/orders/'.$item->id.'/factor' , Lang::get('persian.factor', array(), 'fa') , array('class'=>'btn btn-small btn-info btn-sm')) }}
				</td>
		</tr>
	@endforeach
</table>
</div>
</div>


{{ $items->links() }}