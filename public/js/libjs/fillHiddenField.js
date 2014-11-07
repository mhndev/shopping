  function fillTheHiddenField(attrName , val1 , val2)
  {
  	var trans = [];
    var matchingElements = [];
    var allElements = document.getElementsByTagName('*');
    for (var i = 0, n = allElements.length; i < n; i++)
    {
    	attributes = allElements[i].attributes;
    	for(var j = 0; j<attributes.length; j++){

    		if(attributes[j].name == attrName &&
    		   (attributes[j].nodeValue.substring(0,8) == val1 ||
    		   	attributes[j].nodeValue.substring(0,13) == val2) )
    		{
    			trans.push(allElements[i]);
    		}
    	}
    }
    console.log(trans);

    $features = "{";
    for(i=0;i<trans.length-1;i+=2){
    	$features += "\""+trans[i].value+"\":";
    	$features += "\""+trans[i+1].value+"\",";
    }

    $features = $features.substring(0,$features.length-1);


    $features += "}";
    document.getElementById(val1).value = $features;
  }














function fillTheHiddenFieldTecs(attrName , val1 )
{
    var trans = [];
    var matchingElements = [];
    var allElements = document.getElementsByTagName('*');
    for (var i = 0, n = allElements.length; i < n; i++)
    {
        attributes = allElements[i].attributes;
        for(var j = 0; j<attributes.length; j++){

            if(attributes[j].name == attrName &&
               attributes[j].nodeValue.substring(0,8) == val1 )
            {
                trans.push(allElements[i]);
            }
        }
    }
    console.log(trans);

    $features = "[";
    for(i=0;i<trans.length;i++){
        $features += "\""+trans[i].value+"\",";
    }

    $features = $features.substring(0,$features.length-1);


    $features += "]";
    document.getElementById(val1).value = $features;
}