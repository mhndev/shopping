<?php
class Magniloquent extends Eloquent {
	protected $fillable = [];
	public $columns = [];
	public $join_columns = [];
	public $results;
	public $mjquery;
	public $table;
//************************************************************************
	public function setTable($table){
		$this->table = $table;
	}
//************************************************************************	
	public function __construct($attributes = array())
	{
	  parent::__construct($attributes);
//	  	$this->addObservableEvents('changestate');
//	  	$this::changestate();
	}

//************************************************************************
	public function getThisColumnsNames()
	{
		$columns = DB::select('SHOW COLUMNS FROM '.$this->table);
		$cols = array();
		for($i=0;$i<count($columns);$i++){
			$class = $columns[$i];
				 foreach($class as $key => $value) {
				 	if($key == 'Field')
		 	   	 	array_push($cols, $value);
			}
		}
		$this->columns = $cols;
		return $this;
	}
//*********************************************************************	
	public function getColumnsNames($table)
	{
		$columns = DB::select('SHOW COLUMNS FROM '.$table);
		$cols = array();
		for($i=0;$i<count($columns);$i++){
			$class = $columns[$i];
				 foreach($class as $key => $value) {
				 	if($key == 'Field')
		 	   	 	array_push($cols, $value);
			}
		}
		$this->join_columns = $cols;
		return $this;
	}	
//************************************************************************

	public function filterColumnNames($table , $filters){
		if($table == $this->table)
			$columns = $this->columns;

		else
			$columns = $this->join_columns;

		if(!is_array($filters)){
			$fils = array();
			$fils[0] = $filters;
			$filters = $fils;
		}

			for($i=0;$i<count($filters);$i++){
				if (($key = array_search($filters[$i], $columns)) !== false) {
		    		//unset($columns[$key]);
		    		array_splice($columns, $key, 1);
   				}
			}
		return $columns;
	}
//************************************************************************
	public function getAll($excludes , $id = null , $forein_column = null){
		$thisCat = $this->getThisColumnsNames();
		$columns = $thisCat->columns;

		if(!is_array($excludes)){
			$exc = array();
			$exc[0] = $excludes;
			$excludes = $exc;
		}
		$columns = $this->filterColumnNames($this->table , $excludes);

		if($id == null){
			$results = DB::table($this->table)->select($columns)->get();
			$this->mjquery = DB::table($this->table)->select($columns);
		}
		else{
			$results = DB::table($this->table)->where($forein_column, '=', $id)->select($columns)->get();
			$this->mjquery = DB::table($this->table)->where($forein_column, '=', $id)->select($columns);
		}
		$this->results = $results;
		return $this;
	}	
//*********************************************************************
	public function getResults(){
		return $this->results;
	}
//*********************************************************************
	public function getQuery(){
		return $this->mjquery;
	}	
//************************************************************************	

	public function getAllJoin($tbl , $excludes1 , $excludes2)
	{
		$var = $this->getThisColumnsNames();
		$thisColumns = $var->columns;

		$var = $this->getColumnsNames($tbl);
		$joinColumns = $var->join_columns;

		if(!is_array($excludes1)){
			$exc = array();
			$exc[0] = $excludes1;
			$excludes1 = $exc;
		}

		if(!is_array($excludes2)){
			$exc = array();
			$exc[0] = $excludes2;
			$excludes2 = $exc;
		}
		$thisColumns = $this->filterColumnNames($this->table , $excludes1);
		$joinColumns = $this->filterColumnNames($tbl , $excludes2);

		$select = array();
		for($i=0;$i<count($thisColumns);$i++){
			array_push($select, $this->table.'.'.$thisColumns[$i]);
		}
		for($j=0;$j<count($joinColumns);$j++){
			array_push($select, $tbl.'.'.$joinColumns[$j]);
		}

		$foreign = substr($tbl , 0, -1);

		$results = DB::table($this->table)
            ->join($tbl , $tbl.'.id', '=', $this->table.'.'.$foreign.'_id')
            ->select($select)
            ->get();

            $this->results = $results;
            return $this;
	}
//***********************************************************************
	public function getJsonString($array , $start , $stop){
		if($start != $stop){
			$string = "{";
			$i=0;
			$round = true;
			$keys = array_keys($array);
			for($i=0;$i<count($array);$i++){
				if($i<$stop && $i>$start){

					if($round == true)
					$string .= "\"".$array[$keys[$i]]."\":"."\"".$array[$keys[$i+1]]."\",";

					if($round == true)
						$round = false;
					else
					$round = true;
				}
			}

			$string = substr($string, 0, -1);
			$string.="}";
	}
	else
		$string = '';

		return $string;
	}
//**********************************************************************

public function getLangJs($var){
		$lang = array();
		$var_json = json_decode($var);
		foreach($var_json as $index => $key){
			$lang[$index] = Lang::get('persian.'.$index , array() , 'fa');
		}			
		return $lang;
}	

//**********************************************************************

public function saveRecord($filters){
	$columns = $this->getThisColumnsNames()->filterColumnNames($this->table,$filters);
	foreach($columns as $column){
		$this->$column = Input::get($column);
	}
}
//*************************************************************************

public function saveTOLanguageFile( $inputName , $features){
	$add = '';
	$data = File::get(base_path().'/app/lang/fa/persian.php');
	$data = substr($data , 0 , strlen($data)-5);

	$length = count(get_object_vars(json_decode($features)));
	for($i=1;$i<$length+1;$i++){
		$item = Input::get('newItemFeatures'.$i);
		$itemTrans = Input::get('newItemFeatures'.$i.'Trans');

		if(!Lang::has('persian.'.$item))
		{
			$add .= '\''.$item.'\'=>'.'\''.$itemTrans.'\',';
		}
	}	

	$string = $data .$add. "); ?>";

	File::put(base_path().'/app/lang/fa/persian.php',$string );	
}


	
}