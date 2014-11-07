<?php

class Sell extends Magniloquent {

	public $table = "sells";
	public function order()
	{
		return $this->belongsTo('Order');
	}


	public function product()
	{
		return $this->hasOne('Product');
	}	

}