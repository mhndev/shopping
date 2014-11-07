{{ HTML::script('ckeditor/ckeditor.js') }}
{{ HTML::script('elfinder/js/elfinder.min.js') }}
{{ HTML::style('elfinder/css/theme.css') }}
{{ HTML::style('elfinder/css/elfinder.min.css') }}
{{ HTML::style('colorbox.css') }}
{{ HTML::script('jquery.colorbox-min.js') }}


<div>
<div class="row" style="float:right;">
<div class="col-lg-12">
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{ Lang::get('persian.products-management', array(), 'fa') }}
            <small>
			{{ Lang::get('persian.edit-product', array(), 'fa') }}
            </small>
    	</h1>

        <ol class="breadcrumb">

          <li><a href="{{URL::to('admin/dashboard')}}">
          	<i class="fa fa-dashboard"></i> 
			{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
          </a></li>

          <li class="active">
          	<i class="fa fa-bar-chart-o"></i>
			{{ Lang::get('persian.products-management', array(), 'fa')  }}
          </li>

          <li class="active">
          	<i class="fa fa-dashboard"></i>
			{{ Lang::get('persian.edit-product', array(), 'fa') }}
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

{{ Form::model($model,array('url' =>  array('admin/'.$model->category_id.'/products' , $model->id),'method' => 'PUT'))}}

<div class="col-lg-12 col-md-4 col-sm-6" style="float:right;">

<div class="rowText">

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('name',Lang::get('persian.name' ,array() , 'fa')) }}

			{{ Form::text('name',Input::old('name'),array('class' => 'form-control')) }}
		</div>
	</div>
		
	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('persianName',Lang::get('persian.persianName' ,array() , 'fa')) }}

			{{ Form::text('persianName',Input::old('name'),array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('company',Lang::get('persian.company' ,array() , 'fa')) }}

			{{ Form::text('company',Input::old('company'),array('class' => 'form-control')) }}
		</div>
	</div>


	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('price',Lang::get('persian.price' ,array() , 'fa')) }}

			{{ Form::text('price',Input::old('price'),array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('deals',Lang::get('persian.deals' ,array() , 'fa')) }}

			{{ Form::text('deals',Input::old('deals'),array('class' => 'form-control')) }}
		</div>
	</div>

<?php
$vals = array('0' => Lang::get('persian.special' , array() , 'fa'),
              '1' => Lang::get('persian.ordinary' , array() , 'fa')
              )
?>

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('special',Lang::get('persian.special' ,array() , 'fa')) }}

			{{ Form::select('special', $vals , Input::old('special'),array('class' => 'form-control')) }}
		</div>
	</div>


<?php
$vals = array('0' => Lang::get('persian.disable' , array() , 'fa'),
              '1' => Lang::get('persian.enable' , array() , 'fa')
              )
?>	

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('active',Lang::get('persian.active' ,array() , 'fa')) }}

			{{ Form::select('active', $vals , Input::old('active'),array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('guarantee',Lang::get('persian.guarantee' ,array() , 'fa')) }}

			{{ Form::text('guarantee',Input::old('guarantee'),array('class' => 'form-control')) }}
		</div>
	</div>		

	<div class="col-md-5" style="float:right">
    	<div class="form-group">
			{{ Form::label('serial',Lang::get('persian.serial' ,array() , 'fa')) }}

			{{ Form::text('serial',Input::old('serial'),array('class' => 'form-control')) }}
		</div>
	</div>	

  <div id="inputsTecdecs" class="col-lg-12 col-md-4 col-sm-6" style="float:right;">
  </div>  		



<script type="text/javascript">
var empty = 2;
  if( {{ $tecdec }} !== 'empty')
    features = {{($tecdec)}};
  else
    features = '';

  console.log(features);
  var values = {{  $model->tecdec}};
  console.log(values);
  var extraTecdecs = document.getElementById('inputsTecdecs');
  editForm(features , extraTecdecs , values);
</script>

<input type="hidden" id="tecdec" name="tecdec" />




        	<div class="col-md-5" style="float:right">
	        		<div class="form-group">
						{{
							Form::label('image_showProduct',
							Lang::get('persian.image_showProduct' ,array() , 'fa') , 
							array('class' => 'popup_selector btn btn-success',
							'data-inputid'=>'fileurl1',
							'style'=>'padding:7px; margin:3px;')	)
						}}

						{{
							Form::text('image_showProduct',Input::old('image_showProduct'),
								    array('class' => 'form-control','id'=>'fileurl1'))
						}}
					</div>
			</div>

        	<div class="col-md-5" style="float:right">
	        		<div class="form-group">
						{{
							Form::label('image_products',
							Lang::get('persian.image_products' ,array() , 'fa') , 
							array('class' => 'popup_selector btn btn-success',
							'data-inputid'=>'fileurl2',
							'style'=>'padding:7px; margin:3px;')	)
						}}

						{{
							Form::text('image_products',Input::old('image_products'),
								    array('class' => 'form-control','id'=>'fileurl2'))
						}}
					</div>
			</div>

        	<div class="col-md-5" style="float:right">
	        		<div class="form-group">
						{{
							Form::label('image_products',
							Lang::get('persian.image_products' ,array() , 'fa') , 
							array('class' => 'popup_selector btn btn-success',
							'data-inputid'=>'fileurl2',
							'style'=>'padding:7px; margin:3px;')	)
						}}

						{{
							Form::text('image_products',Input::old('image_products'),
								    array('class' => 'form-control','id'=>'fileurl2'))
						}}
					</div>
			</div>

        	<div class="col-md-5" style="float:right">
	        		<div class="form-group">
						{{
							Form::label('image_products',
							Lang::get('persian.image_products' ,array() , 'fa') , 
							array('class' => 'popup_selector btn btn-success',
							'data-inputid'=>'fileurl2',
							'style'=>'padding:7px; margin:3px;')	)
						}}

						{{
							Form::text('image_products',Input::old('image_products'),
								    array('class' => 'form-control','id'=>'fileurl2'))
						}}
					</div>
			</div>						

        	<div class="col-md-5" style="float:right">
	        		<div class="form-group">
						{{
							Form::label('image_windows',
							Lang::get('persian.image_windows' ,array() , 'fa') , 
							array('class' => 'popup_selector btn btn-success',
							'data-inputid'=>'fileurl3',
							'style'=>'padding:7px; margin:3px;')	)
						}}

						{{
							Form::text('image_windows',Input::old('image_windows'),
								    array('class' => 'form-control','id'=>'fileurl3'))
						}}
					</div>
			</div>

    	<div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_big1',Lang::get('persian.image_big1' ,array() , 'fa') , 
					array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl4','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_big1',Input::old('image_big1'),
						    array('class' => 'form-control','id'=>'fileurl4')) }}
			</div>
		</div>



    	<div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_big2',Lang::get('persian.image_big2' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl5','style'=>'padding:7px; margin:3px;')) }}

				{{ Form::text('image_big2',Input::old('image_big2'),
						    array('class' => 'form-control','id'=>'fileurl5')) }}
			</div>
		</div>



        <div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_big3',Lang::get('persian.image_big3' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl6','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_big3',Input::old('image_big3'),
						    array('class' => 'form-control','id'=>'fileurl6')) }}
			</div>
		</div>
	



		<div class="col-md-5" style="float:right">
			<div class="form-group">
				{{Form::label('image_big4',Lang::get('persian.image_big4' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl7','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_big4',Input::old('image_big4'),
						    array('class' => 'form-control','id'=>'fileurl7')) }}
			</div>
		</div>





    	<div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_big5',Lang::get('persian.image_big5' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl8','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_big5',Input::old('image_big5'),
						    array('class' => 'form-control','id'=>'fileurl8'))}}
			</div>
		</div>
	







    	<div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_small1',Lang::get('persian.image_small1' ,array() , 'fa') , 
					array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl9','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_small1',Input::old('image_small'),
						    array('class' => 'form-control','id'=>'fileurl9')) }}
			</div>
		</div>
		

    	<div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_small2',Lang::get('persian.image_small2' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl10','style'=>'padding:7px; margin:3px;')) }}

				{{ Form::text('image_small2',Input::old('image_small2'),
						    array('class' => 'form-control','id'=>'fileurl10')) }}
			</div>
		</div>


        <div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_small3',Lang::get('persian.image_small3' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl11','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_small3',Input::old('image_small3'),
						    array('class' => 'form-control','id'=>'fileurl11')) }}
			</div>
		</div>


		<div class="col-md-5" style="float:right">
			<div class="form-group">
				{{Form::label('image_small4' , Lang::get('persian.image_small4' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl12','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_small4',Input::old('image_small4'),
						    array('class' => 'form-control','id'=>'fileurl12')) }}
			</div>
		</div>	



    	<div class="col-md-5" style="float:right">
    		<div class="form-group">
				{{ Form::label('image_small5',Lang::get('persian.image_small5' ,array() , 'fa') , array('class' => 'popup_selector btn btn-success',
					'data-inputid'=>'fileurl13','style'=>'padding:7px; margin:3px;')	) }}

				{{ Form::text('image_small5',Input::old('image_small5'),
						    array('class' => 'form-control','id'=>'fileurl13'))}}
			</div>
		</div>




		<div class="col-md-10" style="float:right;">
		<div class="form-group">
			{{ Form::label('description' ,Lang::get('persian.description', array(), 'fa')) }}
			{{ Form::textarea('description' ,Input::old('description'), array('class' => 'form-control','onclick'=>'func()')) }}
		</div>
		</div>


<div class="row" style="float:right;"><div class="col-md-4" style="width:200px;">
{{Form::submit(Lang::get('persian.submit', array(), 'fa'), array('class'=> 'btn btn-primary' , 'style'=>'width:100px; margin-bottom:45px; margin-top:30px;'))}}
	</div>
</div></div>
	{{Form::close()}}


<script>
CKEDITOR.replace( 'description', {
    filebrowserBrowseUrl : '/shopping/public/elfinder/elfinder.html', 
    uiColor : '#9AB8F3',
});
</script>



</div>
</div>


{{ HTML::script('packages/barryvdh/laravel-elfinder/js/standalonepopup.min.js') }}









</div>

{{ HTML::script('js/libjs/completeform.js') }}

<script type="text/javascript">

</script>




<script>

  function getFeatures(element , div){
    var features = "{";
    elements = getAllElementsWithAttribute(element);
    console.log(elements);
    for(var i=0;i<elements.length;i++){
      item = elements[i];
        name  = item.name;
        value = item.value;
        features += "\""+name+"\""+":"+"\""+value+"\",";
    }

    features = features.substring(0,features.length-1);
    features += "}"; 
    console.log(features);
    document.getElementById(div).value = features;
  }


function func(){
	getFeatures('technical' , 'tecdec');
}
</script>