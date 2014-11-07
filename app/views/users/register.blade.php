{{ HTML::style('css/main.css')}}

{{ Form::open(array('url'=>'auth/create', 'class'=>'form-signup')) }}
	<h2 class="form-signup-heading">
		{{ Lang::get('persian.joinUs' , array() , 'fa') }}
	</h2>

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

	{{ Form::text('firstname', null, array('class'=>'input-block-level', 
	'placeholder'=>Lang::get('persian.firstname' , array() , 'fa'))) }}

	{{ Form::text('lastname', null, array('class'=>'input-block-level', 
	'placeholder'=>Lang::get('persian.lastname' , array() , 'fa'))) }}
	
	{{ Form::text('email', null, array('class'=>'input-block-level', 
	'placeholder'=>Lang::get('persian.email' , array() , 'fa'))) }}

	{{ Form::text('mobile', null, array('class'=>'input-block-level', 
	'placeholder'=>Lang::get('persian.mobile' , array() , 'fa'))) }}


	{{ Form::password('password', array('class'=>'input-block-level', 
	'placeholder'=>Lang::get('persian.password' , array() , 'fa'))) }}
	
	{{ Form::password('password_confirmation', array('class'=>'input-block-level', 
	'placeholder'=>Lang::get('persian.password_confirmation' , array() , 'fa'))) }}

	{{ Form::submit(Lang::get('persian.signUp' , array() , 'fa'), array('class'=>'btn btn-large btn-primary btn-block'))}}


{{ Form::close() }}