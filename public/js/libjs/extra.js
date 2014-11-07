function extra(divToAdd ,buttonText , inputName , itemValue , itemName , trans , element1 , element2){
	anchor = document.createElement('a');
	anchor.href = '';

	anchor.innerHTML = buttonText;
	divToAdd.appendChild(anchor);
	var count = 1;


	anchor.onclick = function(e){
		e.preventDefault();
		row = document.createElement('div');
		row.className = 'row';

		col = document.createElement('div');
		col.className = 'col-md-4';
		col.style.float='right';

		formGroup = document.createElement('div');
		formGroup.className = 'form-group';

		label = document.createElement('label');
		label.for = inputName;
		label.innerHTML = itemName;
		label.style.width = '400px';
		label.style.marginTop = '40px';

		input = document.createElement('input');
		input.type = 'text';
		input.name = inputName+count;
		input.className = 'form-control';
		input.style.width = '400px';
		input.setAttribute("element",element1+count);


		labelTrans = document.createElement('label');
		labelTrans.for = inputName+'Trans';
		labelTrans.innerHTML = trans;
		labelTrans.style.width = '400px';
		labelTrans.style.marginTop = '40px';


		inputTrans = document.createElement('input');
		inputTrans.type = 'text';
		inputTrans.name = inputName+count+'Trans';
		inputTrans.className = 'form-control';
		inputTrans.style.width = '400px';	


		label2 = document.createElement('label');
		label2.for = 'itemValue';
		label2.innerHTML = itemValue;
		label2.style.width = '400px';
		label2.style.marginTop = '40px';

		defaults = document.createElement('input');
		defaults.type = 'text';
		defaults.name = inputName+count+'defaults';
		defaults.className = 'form-control';
		defaults.style.width = '400px';
		defaults.setAttribute("element",element2+count);


		labelDefaultTrans = document.createElement('label');
		labelDefaultTrans.for = inputName+'TransDefaults';
		labelDefaultTrans.innerHTML = trans;
		labelDefaultTrans.style.width = '400px';
		labelDefaultTrans.style.marginTop = '40px';


		defaultsTrans = document.createElement('input');
		defaultsTrans.type = 'text';
		defaultsTrans.name = inputName+count+'defaultTrans';
		defaultsTrans.className = 'form-control';
		defaultsTrans.style.width = '400px';	



		sep = document.createElement('hr');
		sep.style.width = '500px';

		sep2 = document.createElement('hr');
		sep2.style.width = '500px';


		formGroup.appendChild(label);
		formGroup.appendChild(input);
		formGroup.appendChild(labelTrans);
		formGroup.appendChild(inputTrans);
		formGroup.appendChild(label2);
		formGroup.appendChild(defaults);
		formGroup.appendChild(labelDefaultTrans);
		formGroup.appendChild(defaultsTrans);
		formGroup.appendChild(sep);
		formGroup.appendChild(sep2);
		col.appendChild(formGroup);
		row.appendChild(col);

		divToAdd.appendChild(row);
		count++;
	}
}








function extraTecs(divToAdd ,buttonText , inputName , itemName , element){
	anchor = document.createElement('a');
	anchor.href = '';

	anchor.innerHTML = buttonText;
	divToAdd.appendChild(anchor);
	var count = 1;


	anchor.onclick = function(e){
		e.preventDefault();
		row = document.createElement('div');
		row.className = 'row';

		col = document.createElement('div');
		col.className = 'col-md-4';
		col.style.float='right';

		formGroup = document.createElement('div');
		formGroup.className = 'form-group';

		label = document.createElement('label');
		label.for = inputName;
		label.innerHTML = itemName;
		label.style.width = '400px';
		label.style.marginTop = '40px';

		input = document.createElement('input');
		input.type = 'text';
		input.name = inputName+count;
		input.className = 'form-control';
		input.style.width = '400px';
		input.setAttribute("element",element+count);


		sep = document.createElement('hr');
		sep.style.width = '500px';

		sep2 = document.createElement('hr');
		sep2.style.width = '500px';


		formGroup.appendChild(label);
		formGroup.appendChild(input);

		formGroup.appendChild(sep);
		formGroup.appendChild(sep2);

		col.appendChild(formGroup);
		row.appendChild(col);

		divToAdd.appendChild(row);
		count++;
	}
}





