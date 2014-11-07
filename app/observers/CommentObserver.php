<?php

class CommentObserver
{

	public function created($model)
	{
		Session::flash('message', Lang::get('persian.add-comment-success', array(), 'fa') );
	}


	public function updated($model)
	{
		Session::flash('message', Lang::get('persian.update-comment-success', array(), 'fa'));
	}

	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-comment-success', array(), 'fa'));
	}

	public function changestate($model)
	{
		Event::listen('comments.changestate', function(){
			Session::flash(Lang::get('persian.changePublishState' , array() , 'fa'));
		});
	}
}

