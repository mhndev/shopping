<div class="row">
          <div class="col-lg-12">
            <h1>
				{{ Lang::get('persian.products-management' , array() , 'fa') }}
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i>
				{{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              </a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> 
				{{ Lang::get('persian.products-management' , array() , 'fa') }}
              </li>
              <li style="width:130px;" class="active"><i class="fa fa-bar-chart-o"></i>
				{{ Lang::get('persian.product-list' , array() , 'fa') }}
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



{{ HTML::link(
	'admin/'.$id.'/products/create' , 
	Lang::get('persian.addProductToThisCat' , array() , 'fa') , 
	array('class'=>'btn btn-success' , 'style'=>'margin-bottom:20px;margin-right:60px;')
) }}


        <div class="row">
        	<div class="col-lg-12" style="float:right;">
<div class="table-responsive col-lg-12 col-md-4 col-sm-6" style="float:right;">

<table class="table table-bordered table-hover table-striped tablesorter"style="direction:rtl">
 	<thead>
		<tr>
			<th>{{ Lang::get('persian.id' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.name' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.company' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.price' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.deals' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.guarantee' , array() , 'fa') }}</th>			
			<th>{{ Lang::get('persian.serial' , array() , 'fa') }}</th>	
			<th>{{ Lang::get('persian.enableDisable' , array() , 'fa') }}</th>
			<th>{{ Lang::get('persian.special' , array() , 'fa') }}</th>
			<th>Actions</th>						
		</tr>
	</thead>
	<tbody>



@foreach ($items as $item)
<tr>
<td>{{ $item->id }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->company }}</td>
<td>{{ $item->price }}</td>
<td>{{ $item->deals }}</td>
<td>{{ $item->guarantee }}</td>
<td>{{ $item->serial }}</td>
<td>

{{Form::open(array('url' => array('admin/'.$id.'/products/activestate', $item->id), 
'method' => 'GET')) }}
@if ($item->active !== '0')
{{ Form::submit(Lang::get("persian.enable" , array() , "fa"), array('class' => 'btn btn-success'))}}
@else
{{ Form::submit(Lang::get("persian.disable" , array() , "fa"), array('class' => 'btn btn-danger')) }}
@endif

{{ Form::close() }}
</td>


<td>

{{Form::open(array('url' => array('admin/'.$id.'/products/specialstate', $item->id), 
'method' => 'GET')) }}
@if ($item->special !== '0')
{{ Form::submit(Lang::get("persian.special" , array() , "fa"), array('class' => 'btn btn-success'))}}
@else
{{ Form::submit(Lang::get("persian.ordinary" , array() , "fa"), array('class' => 'btn btn-danger')) }}
@endif

{{ Form::close() }}
</td>


<td>
<div style="float:right;margin-left:10px;">
<a class="btn btn-small btn-info" href="{{ URL::to('admin/'.$id.'/products/'.$item->id.'/edit')}}">
{{ Lang::get('persian.edit' , array() , 'fa') }}
</a>
</div>	

<div style="float:right;margin-left:10px;">
<a class="btn btn-small btn-primary" href="{{ URL::to('admin/'.$item->id.'/comments')}}">
{{ Lang::get('persian.observeComments' , array() , 'fa') }}
</a>
</div>

<div style="float:right; margin-left:10px;">
{{ Form::open(array('url' => 'admin/'.$id.'/products/' . $item->id)) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit(Lang::get("persian.delete" , array() , "fa"), array('class' => 'btn btn-warning')) }}
{{ Form::close() }}
</div>
</td>
</tr>
@endforeach


		
	</tbody>
</table>
{{ $items->links() }}
</div></div>

</div></div>
</div>




