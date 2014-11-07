    
{{ HTML::style('yekan.css') }}
    <div style="font-family:'yelan'">
<div style="width:978px; margin:auto; text-align:right; direction:rtl;">
       @if(Session::has('message'))
        <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ Session::get('message') }}
              <br>
               @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </div>
    @endif 
</div>

    <div class="col-md-10" style="text-align:right; direction:rtl;">

<h3 style="color: #4a4786; margin-bottom:10px;font-family:'yelan';font-size:22px;">
  {{ Lang::get('persian.contactus' , array() , 'fa') }}
</h3>
    <h5 style="color: #4a4786;font-family:'yelan';font-size:18px;">
  {{ Lang::get('persian.fillcontactusform' , array() , 'fa') }}
  </h5> 



{{Form::open(array('url' => 'contactus', 'method' => 'POST'))}}                                              
<div class="row">   
   <div class="col-md-6" style="float:right;font-family:'yelan'">
        <div class="form-group">
            {{Form::label('name', 'نام و نام خانوادگی ' )}}
            {{Form::text('name','',array('class' => 'form-control', 'style'=>'background-color:#1d2734; color:white'))}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6" style="float:right">
        <div class="form-group">
            {{Form::label('email', 'ایمیل' )}}
            {{Form::text('email','',array('class' => 'form-control' , 'style'=>'background-color:#1d2734; color:white'))}}
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6" style="float:right">
    <div class="form-group">
      {{Form::textarea('description','', array('placeholder'=>'توضیحات...','class'=>'form-control', "style"=>"background-color:#1d2734; color:white; font-family:'yekan'"))}}
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-6" style="float:right;">
    {{Form::submit('ثبت', array('class'=> 'btn btn-primary col-md-6' , 'float'=>'right'))}}
  </div>
</div>

  {{Form::close()}}

</div>

</div>


<div style="clear:both">
  </div>