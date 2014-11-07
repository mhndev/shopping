@if(Session::has('message'))
	<div class="alert alert-info alert-dismissable" style="width:500px; float:right; margin-right:200px; text-align:right; direction:rtl; font-family: 'yekan';">
        {{ Session::get('message') }}
        <br>
    </div>
@endif

<div class="container" style="width:400px; float:right; margin-right:200px; text-align:right; direction:rtl">
{{ Form::open(array('url'=>'auth/signin', 'class'=>'form-signin' ,  'role'=>'form')) }}
    <h2 class="form-signin-heading" style="font-family: 'yekan'; font-size:20px; font-weight:bold">
    	{{ Lang::get('persian.pleaseSignIn' , array() , 'fa') }}
    </h2>

    {{ Form::text('email', null, array('class'=>'form-control', 
    'placeholder'=>'Email address' , 'required autofocus')) }}



	{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password' ,'required')) }}
    <label class="checkbox" style="float:right; width:110px;font-family: 'yekan';">
      <input type="checkbox" value="remember-me">
      	{{ Lang::get('persian.rememberMe' , array() , 'fa') }}
    </label>

    {{ Form::submit(Lang::get('persian.pleaseSignIn' , array() , 'fa') , array('class'=>'btn btn-lg btn-primary btn-block'))}}
	{{ Form::close() }}
</div> <!-- /container -->
<div style="clear:both"></div>