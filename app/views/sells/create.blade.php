<?php

$input_label = array('for'=>'products_id' , 'label'=>Lang::get('persian.products_id', array() , 'fa'));

$input_text  = array('name'=>'products_id' ,'array'=>array('class' => 'form-control','style'=>'width:100px;')); 






$inputs = array(array('label'=>$input_label , 'text'=>$input_text));

$select_label = array();

$select_text = array();

$selects = array(array('label'=>$select_label ,'text'=> $select_text));

$titles = array('title' => Lang::get('persian.orders-management', array(), 'fa'),
 				'subtitle'=> Lang::get('persian.add-sell', array(), 'fa')
				);

$navigate1 = array('url'=>'admin/dashboard',
				   'iclass'=>'fa fa-dashboard',
				   'text'=>Lang::get('persian.admin-firstpage', array(), 'fa'));

$navigate2 = array('liclass'=>'active',
				   'iclass'=>'fa fa-bar-chart-o',
				   'text'=>Lang::get('persian.orders-management', array(), 'fa') );


$navigate3 = array('liclass'=>'active',
			       'iclass'=>'fa fa-bar-chart-o',
				   'text'=>Lang::get('persian.add-sell', array(), 'fa'));

$navigates = array('navigate1'=>$navigate1 , 'navigate2'=>$navigate2 , 'navigate3'=>$navigate3);


$vars = array('inputs'=>$inputs,'selects'=>$selects,'titles'=>$titles ,'navigates'=>$navigates, 'view'=>$id.'/sells');

?>
<div>
	@include('partials.resource-create' , $vars)
</div>
