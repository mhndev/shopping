
<div class="row">
          <div class="col-lg-12">
            <h1>
				{{ Lang::get('persian.sliders-management' , array() , 'fa') }}
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.sliders-management' , array() , 'fa') }}
              </li>
              <li style="width:130px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.slider-list' , array() , 'fa') }}
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
			{{HTML::link('admin/sliders/create',
			Lang::get('persian.add-slider' , array() , 'fa')
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
			{{ Lang::get('persian.priority' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.param1' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.param2' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.param3' , array() , 'fa') }}
			</th>

			<th style="width:300px">
				{{ Lang::get('persian.image' , array() , 'fa') }}
			</th>


			<th>
				{{ Lang::get('persian.enableDisable' , array() , 'fa') }}
			</th>



			<th style="width:320px;">
				Actions
			</th>						
		</tr>
	</thead>
	<tbody>



@foreach ($sliders as $slider)
<tr>
<td>{{$slider->priority }}</td>
<td>{{$slider->param1 }}</td>
<td>{{$slider->param2 }}</td>
<td>{{$slider->param3 }}</td>
<td>{{$slider->image }}</td>
<td>

{{Form::open(array('url' => array('admin/sliders/changestate', $slider->id), 
'method' => 'GET')) }}
@if ($slider->enable !== '0')
{{ Form::submit(Lang::get("persian.enable" , array() , "fa"), array('class' => 'btn btn-success'))}}
@else
{{ Form::submit(Lang::get("persian.disable" , array() , "fa"), array('class' => 'btn btn-danger')) }}
@endif

{{ Form::close() }}
</td>
<td>
<div style="float:right">
		<a class="btn btn-small btn-primary" href="{{ URL::to('admin/sliders/goup/'.$slider->id)}}">
			<i class="fa fa-arrow-up"></i>
		</a>
		<a class="btn btn-small btn-primary" href="{{ URL::to('admin/sliders/godown/'.$slider->id)}}">
			<i class="fa fa-arrow-down"></i>
		</a>


<a class="btn btn-small btn-info" href="{{ URL::to('admin/sliders/'.$slider->id.'/edit')}}">
{{ Lang::get('persian.edit' , array() , 'fa') }}
</a>
</div>	

{{ Form::open(array('url' => 'admin/sliders/' . $slider->id , 'style'=>'width:212px')) }}
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



{{ $sliders->links() }}
