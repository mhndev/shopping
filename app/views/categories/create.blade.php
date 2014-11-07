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

          <li><a href="{{URL::to('admin/dashboard')}}">
          	<i class="fa fa-dashboard"></i> 
			{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
          </a></li>

          <li class="active">
          	<i class="fa fa-bar-chart-o"></i>
			{{ Lang::get('persian.categories-management', array(), 'fa')  }}
          </li>

          <li class="active">
          	<i class="fa fa-dashboard"></i>
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




<div class="rowText">
	{{Form::open(array('url' => 'admin/categories', 'method' => 'POST'))}}


		<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">
			
		@foreach($columns as $column)
			<div class="row">
        		<div class="col-md-8" style="float:right;">
	        		<div class="form-group">
	        			{{ Form::label($column , Lang::get('persian.'.$column, array(), 'fa')) }}
	        			{{ Form::text($column ,'', array('class' => 'form-control'))  }}
					</div>
				</div>
			</div>
		@endforeach
		

<div class="row">
	<div class="col-md-8" style="float:right;">
		<div class="form-group">
			{{ Form::label('image_path1' ,Lang::get('persian.image_path1', array(), 'fa') ,
			array(
				'class' => 'popup_selector btn btn-success',
				'data-inputid'=>'fileurl1',
				'style'=>'padding:7px; margin:3px;'
			)) }}

			{{ Form::text('image_path1' ,'', array(
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

			{{ Form::text('image_path2' ,'', array(
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

			{{ Form::text('image_path3' ,'', array(
				'id'=>'fileurl3' , 'class'=>'form-control'
			    ))  
			}}
		</div>
	</div>
</div>

<!--<div id="extraFeatures" style="margin-top:30px;"></div>-->
<div id="extraTechnicalDetails" style="margin-top:30px;"></div>

<input type="hidden" id="features" name="features" />
<input type="hidden" id="tecdeces" name="tecdec" />



<div class="row" style="float:right;"><div class="col-md-4" style="width:200px;">
{{Form::submit(Lang::get('persian.submit', array(), 'fa'), array('class'=> 'btn btn-primary' , 'style'=>'width:100px; margin-bottom:45px; margin-top:30px;' ,
	'onclick'=>'func()'
))}}
	</div>
</div></div>
	{{Form::close()}}
</div></div>

</div>



{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}
{{ HTML::script('js/libjs/extra.js') }}

<script type="text/javascript">
//addFeature = "{{ Lang::get('persian.addExtraFeature' , array() , 'fa') }}";
addTechnicalDetails = "{{ Lang::get('persian.addTechnicalDetails' , array() , 'fa') }}";
//divExtraFeatures = document.getElementById('extraFeatures');
divExtraTechnicalDetails = document.getElementById('extraTechnicalDetails');
//itemValue = '{{ Lang::get('persian.itemValue' , array() , 'fa') }}';
itemName = '{{ Lang::get('persian.itemName' , array() , 'fa') }}';
//trans = '{{ Lang::get('persian.trans' , array() , 'fa') }}';
//extra(divExtraFeatures , addFeature , 'newItemFeatures' , itemValue , itemName ,trans      ,       'features' , 'defaultValues');



extraTecs(divExtraTechnicalDetails , addTechnicalDetails , 'newItemTechnicalDetails'  , itemName , 'tecdeces');


</script>


{{ HTML::script('js/libjs/fillHiddenField.js') }}

<script type="text/javascript">
function func(){
//fillTheHiddenField('element' , 'features' , 'defaultValues');
fillTheHiddenFieldTecs('element' , 'tecdeces');
}
</script>


