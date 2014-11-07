<?php
use Illuminate\Events\Dispatcher;
class ProductObserver
{
    protected $events;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

    public function saving($model)
    {
        if ($model->isDirty(['active']) && count($model->getDirty()) == 1)
        {
            $this->changeactivestate($model);
        }       

        if ($model->isDirty(['special']) && count($model->getDirty()) == 1)
        {
            $this->changespecialstate($model);
        }              
    }	

	public function created($model)
	{
		Session::flash('message', Lang::get('persian.add-product-success', array(), 'fa') );
	}

	public function updated($model)
	{
		if(  count($model->getDirty()) > 2 || 
			(count($model->getDirty()) == 2 && !$model->isDirty(['active']) && !$model->isDirty(['special']) ) 	){
		Session::flash('message', Lang::get('persian.update-product-success', array(), 'fa'));
		}
	}


	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-product-success', array(), 'fa'));
	}
	
	public function changeactivestate($model)
	{
		Session::flash('message', Lang::get('persian.product-changestate-success', array(), 'fa'));	
	}

	public function changespecialstate($model)
	{
		Session::flash('message', Lang::get('persian.product-changestate-success', array(), 'fa'));	
	}	
}

