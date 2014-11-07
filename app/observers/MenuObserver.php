<?php
use Illuminate\Events\Dispatcher;
class MenuObserver
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
    }	

    public function changestate($model)
    {
    	if($model->enable == 1)
    		Session::flash('message', Lang::get('persian.menuEnable', array(), 'fa') );

    	else 
    		Session::flash('message', Lang::get('persian.menuDisable', array(), 'fa'));
    }

	public function created($model)
	{
		Session::flash('message', Lang::get('persian.addMenuSuccess', array(), 'fa') );
	}


	public function updated($model)
	{
		if(  count($model->getDirty()) > 2 || 
			(count($model->getDirty()) == 2 && !$model->isDirty(['enable']) ) 
		  ){
			Session::flash('message', Lang::get('persian.menu-update-success', array(), 'fa'));
		}
	}

	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-menu-success', array(), 'fa'));
	}


}

