function openme(){

	if(document.getElementById('ejare').checked) {
		document.getElementById('myDiv').innerHTML = "";
		document.getElementById('selectme').style.display = 'block';
	}

	else if (document.getElementById('kharid').checked){
		document.getElementById('myDiv').innerHTML = "";
		loadbuyform();
	}

}



////////////////////////////////////////////////////////////////////////////////////


function loadhireform(){

	var select = document.getElementById("selectme");
	var strUser = select.options[select.selectedIndex].value;


	var xmlhttp;

	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
	    if(xmlhttp.readyState==4 && xmlhttp.status==200){
	    	document.getElementById("myDiv").innerHTML = "";
	    	document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
	    }
	}

if(strUser != ""){
	if(strUser == "ejare-hayat"){
	xmlhttp.open("GET","http://anbaryab.com/public/fa/search3", true);
	}

	else if (strUser == "ejare-sule"){
	xmlhttp.open("GET","http://anbaryab.com/public/fa/search4", true);
	}

	else if (strUser == "ejare-anbar"){
	xmlhttp.open("GET","http://anbaryab.com/public/fa/search5", true);
	}


	xmlhttp.send();
}

	else{
	document.getElementById("myDiv").innerHTML = "";
	}
}


//////////////////////////////////////////////////////////////////////////////////////




function loadbuyform(){

	document.getElementById('selectme').style.display = 'none';
	var xmlhttp;

	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
	    if(xmlhttp.readyState==4 && xmlhttp.status==200){
	    	document.getElementById("myDiv").innerHTML = "";
	    	document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
	    }
	}

//	xmlhttp.open("GET","http://localhost/searchaction?type1=buy&&type2=empty", true);
xmlhttp.open("GET","http://anbaryab.com/public/fa/search2", true);
	xmlhttp.send();
}