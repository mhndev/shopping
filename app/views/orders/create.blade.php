<?php
$input_label1 = array('for'=>'time' , 'label'=>Lang::get('persian.time', array() , 'fa'));

$input_text1  = array('name'=>'time' ,'array'=>array('class' => 'form-control','style'=>'width:100px;'));

$input_label2 = array('for'=>'sent' , 'label'=>Lang::get('persian.sent', array() , 'fa'));

$input_text2  = array('name'=>'sent' ,'array'=>array('class' => 'form-control','style'=>'width:100px;'));

$input_label3 = array('for'=>'received' , 'label'=>Lang::get('persian.received', array() , 'fa'));

$input_text3  = array('name'=>'received' ,'array'=>array('class' => 'form-control','style'=>'width:100px;'));

$input_label4 = array('for'=>'user' , 'label'=>Lang::get('persian.user', array() , 'fa'));

$input_text4  = array('name'=>'user' ,'array'=>array('class' => 'form-control','style'=>'width:100px;'));


$inputs = array(
	array('label'=>$input_label1 , 'text'=>$input_text1),
	array('label'=>$input_label2 , 'text'=>$input_text2),
	array('label'=>$input_label3 , 'text'=>$input_text3),
	array('label'=>$input_label4 , 'text'=>$input_text4)
	);






$select_label = array();
$select_text = array();
$selects = array(array('label'=>$select_label ,'text'=> $select_text));
$titles = array('title' => Lang::get('persian.orders-management', array(), 'fa'),
 				'subtitle'=> Lang::get('persian.add-order', array(), 'fa')
				);

$navigate1 = array('url'=>'admin/dashboard',
				   'iclass'=>'fa fa-dashboard',
				   'text'=>Lang::get('persian.admin-firstpage', array(), 'fa'));

$navigate2 = array('liclass'=>'active',
				   'iclass'=>'fa fa-bar-chart-o',
				   'text'=>Lang::get('persian.orders-management', array(), 'fa') );


$navigate3 = array('liclass'=>'active',
			       'iclass'=>'fa fa-bar-chart-o',
				   'text'=>Lang::get('persian.add-order', array(), 'fa'));

$navigates = array('navigate1'=>$navigate1 , 'navigate2'=>$navigate2 , 'navigate3'=>$navigate3);

$vars = array('inputs'=>$inputs,'selects'=>$selects,'titles'=>$titles ,'navigates'=>$navigates , 'view'=>'orders');



?>

<div>
	@include('partials.resource-create' , $vars)
</div>