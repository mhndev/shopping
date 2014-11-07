
  <div id="c310" class="csc-default layout-0">
    {{Form::open(array('url' => 'admin/'.$product->id.'/comments','id'=>'idForm','method' => 'POST'))}}

  {{ Form::text('name','Name', array('class'=>'solid' , 'id'=>'name' , 'style'=>'direction:ltr'))   }}
  {{ Form::text('email','Email', array('class'=>'solid' , 'id'=>'email' , 'style'=>'direction:ltr')) }}
      <br/><br/>

{{ Form::textarea('text' ,'', array('class' => 'solid' , 'id'=>'text' , 'style'=>'resize: none; width: 500px; height: 200px; direction: rtl')) }}

      </textarea>
      <br/><br/>
    {{Form::submit(Lang::get('persian.submit', array(), 'fa'), 
                  array('class'=> 'large'))}}

    {{Form::close()}}
  </div>



  <script type="text/javascript">
    $("#idForm").submit(function() {

    var url = "{{ Url::to('admin/'.$product->id.'/comments') }}"; 

    $.ajax({
           type: "POST",
           url: url,
           data: $("#idForm").serialize(),
           success: function(data)
           {
              console.log(data);
              alert("{{ Lang::get('persian.cmntsuccapprove' , array() , 'fa') }}");
              $('#name').val('Name');
              $('#email').val('Email');
              $('#text').val('');
           }
         });

    return false;
});

  </script>