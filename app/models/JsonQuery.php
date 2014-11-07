<?php
class JsonQuery {
	public $getParams;
	public $paramArray;

    public function __construct($getParams) {
   	    $this->getParams    = $getParams;
        $this->paramArray   = $this->getUrlArray();
    }

	public function getUrlArray(){
        $myFeatures = explode('/', $this->getParams);
        $key_val = array();
        for($i=0;$i<count($myFeatures);$i++){
        	$key_val[$i] = explode('_' , $myFeatures[$i]);
        }		
        return $key_val;
	}

	public function queryJson($products){
		$url = $this->paramArray;
		$true = array();
		$add = true;
		for($i=0;$i<count($products);$i++){
				$add = true;
			 	$features = $products[$i]->features;
			 	$features = json_decode($features);
			 for($j=0;$j<count($url);$j++){
				if(count($url[$j]) == 2 && $url[$j][0] != 'price'){
					if($url[$j][1] == $features->$url[$j][0] ){
					}else{
						$add = false; break; continue 2;
					}
				}
				else if(count($url[$j]) == 3 && $url[$j][0] == 'price'){

					if($url[$j][1] <= $features->$url[$j][0] && 
					   $url[$j][2] >= $features->$url[$j][0]){				
					}else{
						$add = false; break; continue2;
					}
				}
			 }
			 if($add != false)
			 array_push($true, $products[$i]);
		}
		return $true;
	}
}