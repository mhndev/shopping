function completeForm(features , lang , extraElement , param ){


	if(features != ''){
	var keys = Object.keys(features);
	
	var i = 0;



	for(var feature in features){
		row = document.createElement('div');
		row.className = 'row';


		//row.style.float = 'right';


		outerDiv = document.createElement('div');
		outerDiv.className = 'col-md-8';
		outerDiv.style.float = 'right';

		innerDiv = document.createElement('div');
		innerDiv.className = 'form-group';

		if(feature !== 'price'){
		label = document.createElement('label');
		var key = keys[i];
		label.for = key;
		label.innerHTML = lang[key];
		}
		if(param == 'create'){
		var res = features[feature].split(",");
	    if(res[0] !== 'number'){
			insel = document.createElement("select");
			insel.name = keys[i];
			insel.setAttribute("element","features");
			insel.className = 'formDropdown';

			for(j=0;j<res.length;j++)
			{
					var op = new Option();
					op.value = res[j];
					op.text = res[j];
					console.log(op);
					insel.options.add(op);     
			}
		}
			else{

				insel = document.createElement('input');
				insel.setAttribute("element","features");
				if(feature == 'price')
					insel.type="hidden";
				else
				insel.type="text";
				insel.name = keys[i];
				insel.className = 'form-control';	
				insel.id = keys[i];

				if(feature == 'price')
					insel.id = 'price2';
				insel.innerHTML = keys[i];							
			} 		
		}

	


		else if (param = 'edit'){
		insel = document.createElement('input');
		insel.name = feature;
		insel.className = 'form-control';
		insel.setAttribute("element","features");
		insel.id = feature;
		//insel.style.width = '300px';
		insel.style.marginRight = '20px;';
		insel.type = 'text';
		insel.innerHTML = feature;
		insel.value = features[feature];			
	}
	
		innerDiv.appendChild(label);
		innerDiv.appendChild(insel);
		outerDiv.appendChild(innerDiv);
		row.appendChild(outerDiv);
		extraElement.appendChild(row);

		i++;
	}

}
}





function completeForm2(features  ,extraElement , param ){

	$div = document.createElement('div');

	for(i=0;i<features.length;i++){

		$newElement = document.createElement('label');
		$newElement.for = features[i];
		$newElement.innerHTML = features[i];

		$newElementInput = document.createElement('input');
		$newElementInput.name = features[i];
		$newElementInput.setAttribute('technical' , 'details');

		$div.appendChild($newElement);
		$div.appendChild($newElementInput);
	}

	extraElement.appendChild($div);
}