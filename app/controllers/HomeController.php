<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return View::make('index');
	}

	public function getBuyguide()
	{
		return View::make('buyguide');
	}

	public function getContactus()
	{
		return View::make('contactus');
	}

	public function getShowcategory()
	{
		return View::make('showcategory');
	}

	public function getShowproduct()
	{
		return View::make('showproduct');
	}




}
