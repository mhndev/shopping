@extends('layouts.site')
	@section('content')
		{{ HTML::style('css/error.css') }}
					<h1>Error (500)</h1>
		<div class="figure" style="margin-top:0">
			{{ HTML::image('images/psychobox.png' , 'Erroe:') }}
		</div>

		<div id="errorbox" style="dirction:rtl ; text-align:right;">

			متاسفانه صفحه ای که به دنبال آن هستید موجود نیست. به 
			{{ HTML::link('menu/help' , 'راهنمای سایت ما') }}
			رجوع کنید
			و یا به 
			{{ HTML::link('/', 'صفحه اصلی')}}
			سایت بروید
		</div>
	@stop