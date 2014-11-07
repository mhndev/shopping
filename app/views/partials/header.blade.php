<div class="row" style="float:right;">
<div class="col-lg-12">
<div class="row" >
  <div class="col-lg-12" >

        <h1>{{$vars['titles']['title']}}
            <small>
			{{$vars['titles']['subtitle'] }}
            </small>
    	</h1>

        <ol class="breadcrumb">

          <li><a href="{{URL::to($vars['navigates']['navigate1']['url'])}}">
          	<i class="{{$vars['navigates']['navigate1']['iclass']}}"></i> 
			{{ $vars['navigates']['navigate1']['text'] }}
          </a></li>

          <li class="{{$vars['navigates']['navigate2']['liclass']}}">
          	<i class="{{$vars['navigates']['navigate2']['iclass']}}"></i>
			{{ $vars['navigates']['navigate2']['text']}}
          </li>

          <li class="{{$vars['navigates']['navigate3']['liclass']}}">
          	<i class="{{$vars['navigates']['navigate1']['iclass']}}"></i>
			{{ $vars['navigates']['navigate3']['text'] }}
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