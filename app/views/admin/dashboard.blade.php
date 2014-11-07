<div class="row" >
  <div class="col-lg-12" >

        <h1>{{Lang::get('persian.admin-firstpage', array(), 'fa')}}

    	</h1>


<ol class="breadcrumb">

  <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i> 
	{{ Lang::get('persian.admin-firstpage', array(), 'fa') }}
  </a></li>


</ol>
        @if(Session::has('message'))
        	<div class="alert alert-info alert-dismissable">
                {{ Session::get('message') }}
                <br>
            </div>
		@endif
    </div>
</div><!-- /.row -->
<div class="alert alert-success alert-dismissable">{{ $message }}</div>