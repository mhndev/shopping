<div class="row">
          <div class="col-lg-12">
        <h1>{{ Lang::get('persian.'.$dashboard, array(), 'fa') }}
            <small>
			{{ Lang::get('persian.'.$list, array(), 'fa') }}
            </small>
    	</h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.'.$dashboard , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.'.$mngt , array() , 'fa') }}
              </li>
              <li style="width:130px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.'.$list , array() , 'fa') }}
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
					{{ Form::open(array('url' => $view . '/'.$item->id)) }}
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