<?php
//use Illuminate\Events\Dispatcher;
class CategoryObserver
{

    // protected $events;

    // public function __construct(Dispatcher $dispatcher)
    // {
    //     $this->events = $dispatcher;
    // }

    // public function saving($model)
    // {
    //     if ($model->isDirty(['enable']) && count($model->getDirty()) == 1)
    //     {
    //         $this->changestate($model);
    //     }             
    // }	

	public function created($model)
	{
		Session::flash('message', Lang::get('persian.insert-category-success', array(), 'fa') );
	}

	public function updated($model)
	{
		Session::flash('message', Lang::get('persian.update-category-success', array(), 'fa') );
	}

	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-category-success', array(), 'fa') );
	}

	//public function changestate($model){}
}


