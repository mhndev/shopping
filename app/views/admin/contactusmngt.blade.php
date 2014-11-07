 <div class="row">
          <div class="col-lg-12">
            <h1>
          {{ Lang::get('persian.admin-firstpage' , array() , 'fa') }}
              <small>
                {{ Lang::get('persian.contactus-management' , array() , 'fa') }}
              </small></h1>
            <ol class="breadcrumb">
              <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i> پیشخوان</a></li>
              <li class="active" style="width:150px;"><i class="fa fa-bar-chart-o"></i>
               {{ Lang::get('persian.contactus-management' , array() , 'fa') }}
             </li>
              <li class="active" style="width:150px;"><i class="fa fa-bar-chart-o"></i>
               {{ Lang::get('persian.messages-list' , array() , 'fa') }}
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

  <table class="table table-striped table-bordered" style="direction:rtl">
  <thead>
    <tr>
      <td>شماره</td>
      <td>نام</td>
      <td>ایلمی</td>
      <td>توضیحات</td>
      <td>Actions</td>
    </tr>
  </thead>
  <tbody>
    <?php $counter = 1?>
    @foreach ($messages as $msg)

      <tr>
        <td>{{$counter}}</td>
        <td>{{$msg->name}}</td>
        <td>{{$msg->email}}</td>
        <td>{{$msg->description}}</td>
        <td>
          {{ Form::open(array('url' => 'admin/contactus/' . $msg->id)) }}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit(Lang::get("persian.delete" , array() , "fa"), array('class' => 'btn btn-warning' , 'style'=>'width:100px;')) }}
          {{ Form::close() }}
        </td>
      </tr>
    <?php $counter++; ?>
    @endforeach
    
  </tbody>
</table>