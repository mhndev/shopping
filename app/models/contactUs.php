<?php

class Contactus extends Eloquent {
	protected $table = 'contacts';
	public static $rules = array('tel' => 'required|min:2', 
								 'email' => 'email');
	public static $messages = array('name.required' => 'لطفا نام خود را بنویسید',
								   'family.required' => 'لطفا نام خانوادگی خود را بنویسید',
								   'address.required' => 'لطفا آدرس خود را بنویسید',
								   'tel.required' => 'لطفا شماره تماس خود را بنویسی',
								   
								   'tel.between' => 'شماره وارد شده معتبر نمی باشد',);

}