
<?php
$extra1 = array('class'=>'btn btn-small btn-info',
				'text' =>Lang::get('persian.edit', array(), 'fa'),
				'url'  =>array('first'=>'admin/orders/' , 'second'=>'id' , 'third'=>'/edit'));

$extra2 = array('class' => 'btn btn-small btn-success' ,
				'text'  => Lang::get('persian.order-products-show', array(), 'fa'),
				'url'   => array('first'=>'admin/','second'=>'id','third'=>'/products') );


$extras = array($extra1 , $extra2 );
?>
<div>

@if(Session::has('message'))
	<div class="alert alert-info alert-dismissable">
        {{ Session::get('message') }}
        <br>
    </div>
@endif



<table class="table">
	<tr>
		@foreach($columns as $column)
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
				<td style="text-align:center;margin:10px;">{{ $item->$column }}</td>
			@endforeach	

				<td style="text-align:center;margin:10px;">
					{{ Form::open(array('url' => 'sells/' . '/'.$item->id)) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit(Lang::get('persian.delete', array(), 'fa'),
						 array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}
				</td>

				@foreach($extras as $extra)
					<td style="text-align:center; margin:10px;"><a class="{{$extra['class']}}"
					href="{{ URL::to($extra['url']['first'].$item->id.$extra['url']['third'])}}">
					{{ $extra['text'] }}
					</a></td>
				@endforeach
		</tr>
	@endforeach
</table>
</div>
