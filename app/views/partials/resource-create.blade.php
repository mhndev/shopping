@include('partials.header')

<div class="rowText">
	{{Form::open(array('url' => 'admin/'.$view, 'method' => 'POST'))}}


		<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">
			
		@foreach($vars['inputs'] as $input)
			<div class="row">
        		<div class="col-md-4" style="float:right;">
	        		<div class="form-group">
	        			{{ Form::label($input['label']['for'] ,$input['label']['label']) }}
	        			{{ Form::text($input['text']['name'] ,'', $input['text']['array'])  }}
					</div>
				</div>
			</div>
		@endforeach
		
<div id="extra">
</div>

@include('partials.footer')