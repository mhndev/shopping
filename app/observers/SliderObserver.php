<?php
use Illuminate\Events\Dispatcher;
class SliderObserver
{

    protected $events;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

    public function saving($model)
    {
        if ($model->isDirty(['enable']) && count($model->getDirty()) == 1)
        {
            $this->changestate($model);
        }

        if ($model->isDirty(['priority']) && count($model->getDirty()) == 1)
        {
            $this->changepriority($model);
        }                         
    }	



	public function created($model)
	{
		Session::flash('message', Lang::get('persian.sliders-added-success', array(), 'fa') );
	}

	public function updated($model)
	{
		if(  count($model->getDirty()) > 2 
			|| 
			(count($model->getDirty()) == 2 && !$model->isDirty(['enable']) && !$model->isDirty(['priority']) )
		  ){		
		Session::flash('message', Lang::get('persian.update-slider-success', array(), 'fa'));
		}
	}

	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-slider-success', array(), 'fa'));
	}

	public function changestate($model)
	{
		Session::flash('message', Lang::get('persian.slider-changestate', array(), 'fa'));
	}

	public function changepriority($model)
	{
		Session::flash('message', Lang::get('persian.slider-changestate', array(), 'fa'));
	}

}

