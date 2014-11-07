{{ HTML::style('css/yekan.css') }}
{{ HTML::style('front/css/bootstrap.css') }}
{{ HTML::script('js/jquery-1.10.2.js') }}




@if(Session::has('user.basket'))
{{ Form::open(array('url'=>'pay' , 'method'=>'post' , 'id'=>'myForm')) }}
	<div id="myDiv">
		<div style="margin:auto; direction:rtl; text-align:center; width:900px; height:500px; font-family:'yekan'">
			<table  class="table" >
				<tr>
					<th style="text-align:center">{{ Lang::get('persian.namekala' , array() , 'fa') }}</th>
					<th style="text-align:center">{{ Lang::get('persian.company' , array() , 'fa') }}</th>
					<th style="text-align:center">{{ Lang::get('persian.guarantee' , array() , 'fa') }}</th>
					<th style="text-align:center">{{ Lang::get('persian.price' , array() , 'fa') }}</th>
					<th style="text-align:center">{{ Lang::get('persian.deals' , array() , 'fa') }}</th>
					<th style="text-align:center">{{ Lang::get('persian.number' , array() , 'fa') }}</th>				
					<th style="text-align:center">{{ Lang::get('persian.delete' , array() , 'fa') }}</th>

				</tr>
				<?php
				$i = 0;
				?>
				@foreach($basket as $product)
				<?php  $i++;
				?>
					<tr>
						<td>{{ $product['name'] }}      </td>
						<td>{{ $product['company'] }}   </td>
						<td>{{ $product['guarantee'] }} </td>
						<td>{{ $product['price'] }}     </td>
						<td>{{ $product['deals'] }}     </td>
						<td>{{ Form::selectRange('number'.$i, 1, 10, $product['number'], ['class' => 'formDropdown']) }}</td>

						<td><a class="btn btn-warning" href="javascript:void(0)" onclick="removefromcart({{ $product['id'] }})" style="color:white" > 
							{{ Lang::get('persian.delete' , array() , 'fa') }} 
						</a></td>
					</tr>
				@endforeach
			</table> 
		</div>

		<div style="clear:both;"> 
		</div>
	</div>

{{Form::submit(Lang::get('persian.submit', array(), 'fa'), 
              array('class'=> 'btn btn-sm btn-success' , 'id'=>'submit',
              'style'=>"width:150px; margin-left:200px; font-family:'yekan'"))}}	
	<div id="spinner" class="spinner" style="display:none;">
		<!--<img id="img-spinner" src="spinner.gif" alt="Loading"/>-->
		{{ HTML::image('spinner.gif') }}
	</div>


	@else
	<div id="empty-basket" style="width:900px; height: 500px; text-align:right; direction:rtl; padding:20px;">
		{{ Lang::get('persian.basketisempty' , array() , 'fa') }}
	</div>


{{ Form::close() }}
@endif


<script>

// function sesscount(){
// myData = 'salam';
// $.ajax({
//     url: "{{ URL::to('sesscount') }}",
//     type: "POST",
//     data: myData,
//     context: this,
//     error: function () {},
//     dataType: 'json',
//     success : function (response) {
//        if(response.count == 0)
//        	return false;

//     }
// });

// }

    // }
// console.log(a);

document.getElementById('myForm').onsubmit = function() {
	var count = "{{ count(Session::get('user.basket')) }}";
	if(count == 0){
		alert("{{ Lang::get('persian.basketempty' , array() , 'fa') }}");
		return false;
	}
}

</script>





<script>
function removefromcart(id ){
	$.ajax({
	  url: "{{ URL::to('removefromcart/') }}/"+id,
	  context: document.body
	}).done(function(data) {
	  getNewTable(data.data);
	  console.log(data);
	});
}

function getNewTable(data){
	var div = document.createElement('div');
	div.style.margin = "auto";
	div.style.direction = "rtl";
	div.style.textAlign = "center";
	div.style.width = "900px";
	div.style.height = "500px";
	div.style.fontFamily = "yekan";



	table = document.createElement('table');
	tbody = document.createElement('tbody');

	table.appendChild(tbody);	
	table.className = 'table';

	div.appendChild(table);
	

	tr = document.createElement('tr');
	nameLabel = document.createElement('th');
	nameLabel.style.textAlign = "center";
	nameLabel.innerHTML = "{{ Lang::get('persian.name' , array() , 'fa') }}";
	tr.appendChild(nameLabel);

	companyLabel = document.createElement('th');
	companyLabel.style.textAlign = "center";;
	companyLabel.innerHTML = "{{ Lang::get('persian.company' , array() , 'fa') }}";
	tr.appendChild(companyLabel);


	guaranteeLabel = document.createElement('th');
	guaranteeLabel.style.textAlign = "center";
	guaranteeLabel.innerHTML = "{{ Lang::get('persian.guarantee' , array() , 'fa') }}";
	tr.appendChild(guaranteeLabel);		

	priceLabel = document.createElement('th');
	priceLabel.style.textAlign = "center";
	priceLabel.innerHTML = "{{ Lang::get('persian.price' , array() , 'fa') }}";
	tr.appendChild(priceLabel);	

	dealsLabel = document.createElement('th');
	dealsLabel.style.textAlign = "center";
	dealsLabel.innerHTML = "{{ Lang::get('persian.deals' , array() , 'fa') }}";
	tr.appendChild(dealsLabel);		


	numberLabel = document.createElement('th');
	numberLabel.style.textAlign = "center";
	numberLabel.innerHTML = "{{ Lang::get('persian.number' , array() , 'fa') }}";
	tr.appendChild(numberLabel);		
	

	deleteLabel = document.createElement('th');
	deleteLabel.style.textAlign = "center";
	deleteLabel.innerHTML = "{{ Lang::get('persian.delete' , array() , 'fa') }}";
	tr.appendChild(deleteLabel);		



	tbody.appendChild(tr);
	for(i=0;i<data.length;i++){
		newtr = document.createElement('tr');

		nameLabel = document.createElement('td');
		nameLabel.style.textAlign = "center";
		nameLabel.innerHTML = data[i].name;
		newtr.appendChild(nameLabel);

		companyLabel = document.createElement('td');
		companyLabel.style.textAlign = "center";
		companyLabel.innerHTML = data[i].company;
		newtr.appendChild(companyLabel);


		guaranteeLabel = document.createElement('td');
		guaranteeLabel.style.textAlign = "center";
		guaranteeLabel.innerHTML = data[i].guarantee;
		newtr.appendChild(guaranteeLabel);	


		priceLabel = document.createElement('td');
		priceLabel.style.textAlign = "center";
		priceLabel.innerHTML = data[i].price;
		newtr.appendChild(priceLabel);	

		dealsLabel = document.createElement('td');
		dealsLabel.style.textAlign = "center";
		dealsLabel.innerHTML = data[i].deals;
		newtr.appendChild(dealsLabel);		

		numberLabel = document.createElement('td');
		numberLabel.style.textAlign = "center";
		newtr.appendChild(numberLabel);	

		selectElement = document.createElement('select');
		selectElement.className = "formDropdown";


		for(k=1;k<10;k++){
			option = document.createElement('option');
			option.setAttribute('value' , k);
			option.innerHTML = k;
			if(k === data[i].number)
				option.setAttribute('selected' , 'selected');
			selectElement.appendChild(option);
		}

		numberLabel.appendChild(selectElement);

		deleteLabel = document.createElement('td');
		deleteLabel.style.textAlign = "center";

		link = document.createElement('a');
		link.setAttribute('onclick' , "removefromcart("+data[i].id+")");
		link.className = "btn btn-warning";
		link.style.color = "white";
		//link.onclick = "removefromcart("+data[i].id+")";
		//link.addEventListener('click', removefromcart(data[i].id), false);
		link.href = "javascript:void(0)";
		link.innerHTML = "{{ Lang::get('persian.delete' , array() , 'fa') }}";

		deleteLabel.appendChild(link);

		newtr.appendChild(deleteLabel);	
		tbody.appendChild(newtr);	
	}
	$('#myDiv').trigger('pagecreate');
	document.getElementById('myDiv').innerHTML = "";
	document.getElementById('myDiv').appendChild(div);
	$('#myDiv').trigger('pagecreate');



}


$(document).ready(function(){
    $("#spinner").bind("ajaxSend", function() {
        $(this).show();
    }).bind("ajaxStop", function() {
        $(this).hide();
    }).bind("ajaxError", function() {
        $(this).hide();
    });
 
     });
</script>



