{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}
<div class="row" style="float:right;">
<div class="col-lg-12">

<div class="row" >
  <div class="col-lg-12" >
        <h1>{{ Lang::get('persian.categories-management', array(), 'fa') }}
            <small>
			{{ Lang::get('persian.add-category', array(), 'fa') }}
            </small>
    	</h1>


        <ol class="breadcrumb">
          <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i> 
			{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
          </a></li>
          <li class="active"><i class="fa fa-bar-chart-o"></i>
			{{ Lang::get('persian.categories-management', array(), 'fa') }}
          </li>
          <li class="active"><i class="fa fa-bar-chart-o"></i>
			{{ Lang::get('persian.add-category', array(), 'fa') }}
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



{{ Form::model($model, array('url' => array('admin/categories', $model->id), 
'method' => 'PUT')) }}
<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">

	<div class="row">
		<div class="col-md-8" style="float:right">
			<div class="form-group">
				{{Form::label('name', 
				 Lang::get('persian.name', array(), 'fa')	)}}

				{{Form::text('name',Input::old('name'),array('class' => 'form-control' ))}}
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-8" style="float:right;">
			<div class="form-group">
				{{ Form::label('image_path1' ,Lang::get('persian.image_path1', array(), 'fa') ,
				array(
					'class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl1',
					'style'=>'padding:7px; margin:3px;'
				)) }}

				{{ Form::text('image_path1' ,Input::old('image_path1'), array(
					'id'=>'fileurl1' , 'class'=>'form-control'
				    ))  
				}}
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-8" style="float:right;">
			<div class="form-group">
				{{ Form::label('image_path2' ,Lang::get('persian.image_path2', array(), 'fa') ,
				array(
					'class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl2',
					'style'=>'padding:7px; margin:3px;'
				)) }}

				{{ Form::text('image_path2' ,Input::old('image_path2'), array(
					'id'=>'fileurl2' , 'class'=>'form-control' , 'element'=>'salam'
				    ))  
				}}
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-8" style="float:right;">
			<div class="form-group">
				{{ Form::label('image_path3' ,Lang::get('persian.image_path3', array(), 'fa') ,
				array(
					'class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl3',
					'style'=>'padding:7px; margin:3px;'
				)) }}

				{{ Form::text('image_path3' ,Input::old('image_path3'), array(
					'id'=>'fileurl3' , 'class'=>'form-control'
				    ))  
				}}
			</div>
		</div>
	</div>
					


	<div id="extra">
	</div>


					
	<div class="row" style="clear:both; float:right">
		<div class="col-md-4" >
			{{Form::submit(
				 Lang::get('persian.submit', array(), 'fa')
				, array('class'=> 'btn btn-primary','onclick'=>'getFeatures();' , 
				'style'=>'width:100px'))}}
		</div>
	</div>


	<input type="hidden" id="features" name="features" />

	</div>
</div>
</div>

	{{Form::close()}}




<script type="text/javascript">

	var features = {{($model->features)}};
	
	var extra = document.getElementById('extra');
	completeForm(features , lang , extra , 'edit');


	function getAllElementsWithAttribute(attribute)
	{
	  var matchingElements = [];
	  var allElements = document.getElementsByTagName('*');
	  for (var i = 0, n = allElements.length; i < n; i++)
	  {
	    if (allElements[i].getAttribute(attribute))
	    {
	      // Element exists with attribute. Add to array.
	      matchingElements.push(allElements[i]);
	    }
	  }
	  return matchingElements;
	}


	function getFeatures(){
		var features = "{";
		elements = getAllElementsWithAttribute('element');

		for(var i=0;i<elements.length;i++){
			item = elements[i];
				name  = item.name;
				value = item.value;
				features += "\""+name+"\""+":"+"\""+value+"\",";
		}

		features = features.substring(0,features.length-1);
		features += "}"; 
		console.log(features);
		document.getElementById('features').value = features;
	}

</script>



{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}