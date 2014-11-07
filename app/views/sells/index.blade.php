<?php
$extras = array();
?>

<div>

@if(Session::has('message'))
	<div class="alert alert-info alert-dismissable">
        {{ Session::get('message') }}
        <br>
    </div>
@endif



<table class="table" style="text-align:right;direction:rtl">
	<tr>
		@foreach($columns as $column)
			<th style="text-align:center ; margin:10px;">{{Lang::get('persian.'.$column, array(), 'fa');    }}</th>
		@endforeach

@if($type === 'html')
<th style="text-align:center;  margin:10px;">
	{{Lang::get('persian.delete', array(), 'fa');    }}
</th>
@endif


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

				@if($type === 'html')
				<td style="text-align:center;margin:10px;">
					{{ Form::open(array('url' => $view . '/'.$item->id)) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit(Lang::get('persian.delete', array(), 'fa'),
						 array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}
				</td>
				@endif

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