<?php

$style=array('class' => 'form-control' , 'style'=>'width:100px;');
$items=array('time','sent','received','users_id');


for($i=1;$i<count($items)+1;$i++){
$var1 = 'input_label'.$i;
$$var1 = array('for'=>$items[$i-1] , 'label'=>Lang::get('persian.'.$items[$i-1], array(), 'fa'));
$var2 = 'input_text'.$i;
$$var2 = array('name'=>$items[$i-1] ,'array'=>$style);
}


$inputs = array();
for($i=1;$i<count($items)+1;$i++){
	$var1 = 'input_label'.$i;
	$var2 = 'input_text'.$i;
	$temp = array('label'=>$$var1 , 'text'=>$$var2);
	array_push($inputs, $temp);
}


$select_label = array();
$select_text = array();
$selects = array(array('label'=>$select_label ,'text'=> $select_text));
$titles = array('title' => Lang::get('persian.orders-management', array(), 'fa'),
 				'subtitle'=> Lang::get('persian.add-order', array(), 'fa'));


$navigate1 = array('url'=>'admin/dashboard','iclass'=>'fa fa-dashboard',
				   'text'=>Lang::get('persian.orders-management', array(), 'fa'));

$navigate2 = array('liclass'=>'active','iclass'=>'fa fa-bar-chart-o',
				   'text'=>Lang::get('persian.add-order', array(), 'fa') );


$navigate3 = array('liclass'=>'active','iclass'=>'fa fa-bar-chart-o',
				   'text'=>Lang::get('persian.add-order', array(), 'fa'));


$navigates = array('navigate1'=>$navigate1 , 'navigate2'=>$navigate2 , 'navigate3'=>$navigate3);

if($model)
$url = array('admin/orders/'.$model->id);

$vars = array('inputs'=>$inputs,'selects'=>$selects,'titles'=>$titles ,'navigates'=>$navigates , 'view'=>'orders' , 'url'=>$url);
?>