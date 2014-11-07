<?php

class UserresourceObserver
{
	public function creating($model)
	{
		Session::flash('message', 'product is creating');
	}

	public function created($model)
	{
		Session::flash('message', Lang::get('persian.addUserSuccess' , array() , 'fa') );
	}

	public function updating($model)
	{
		Session::flash('message', 'product is updating');
	}

	public function updated($model)
	{
		Session::flash('message', Lang::get('persian.user-update-success', array(), 'fa'));
	}

	public function deleting($model)
	{
		Session::flash('message', 'product is deleting');
	}

	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-user-success' , array() , 'fa'));
	}

	public function restoring($model)
	{
		Session::flash('message', 'product is restoring');
	}

	public function restored($model)
	{
		Session::flash('message', 'product has been restored');
	}
	public function changestate($model)
	{
		Session::flash('message', Lang::get('persian.changestate' , array() , 'fa'));
	}


}

