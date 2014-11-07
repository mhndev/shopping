<div id="viewContainer" style="width:978px; margin:auto; direction:rtl; text-align:right; padding:20px;">
    {{Form::open(array('url' => 'paypost', 'method' => 'POST'))}}
<label>{{ Lang::get('persian.naghdi' , array() ,'fa') }}</label>
<div id="naghdi">{{ Form::radio('paytype', 'naghdi' , null , array('id'=>'naghd')) }}</div>
<label>{{ Lang::get('persian.kartbekart' , array() ,'fa') }}</label>
<div id="kartbekart">{{ Form::radio('paytype', 'kartbekart' , null , array('id'=>'kart')) }}</div>
<div id="payId" style="display:none; margin-bottom:15px;">
	<label>{{ Lang::get('persian.payid' , array() , 'fa') }}</label>
	<input type="text" name="payid" />
</div>
<div style="margin-bottom:15px;">
	<label>{{ Lang::get('persian.phonenumber' , array() ,'fa') }}</label>
	<input type="text" name="phone" />
</div>

<div>
	<label>{{ Lang::get('persian.address' , array() ,'fa') }}</label>
	<textarea rows="4" cols="50" name="address"></textarea>
</div>

<div style="clear:both; margin-top:15px;">
{{Form::submit(Lang::get('persian.submit', array(), 'fa'), 
              array('class'=> 'btn btn-sm btn-success' , 'id'=>'submit',
              'style'=>'width:150px;'))}}
</div>


</div>



<div style="clear:both">
</div>


<script type="text/javascript">

document.getElementById('kart').onclick = function(){
  		document.getElementById('payId').style.display = "block";	
}

document.getElementById('naghd').onclick = function(){
  		document.getElementById('payId').style.display = "none";	
}
</script>