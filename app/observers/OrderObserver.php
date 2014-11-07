<?php
use Illuminate\Events\Dispatcher;
class OrderObserver
{
    protected $events;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

    public function saving($model)
    {
        if ($model->isDirty(['payed']))
        {
            $this->payed($model);
        }

        if ($model->isDirty(['sent']))
        {
            $this->payed($model);
        }

        if ($model->isDirty(['received']))
        {
            $this->payed($model);
        }                
    }	

    public function payed($model)
    {
        Session::flash('message', Lang::get('persian.ordersregisteredsuccess', array(), 'fa') );
    }

    public function sent($model)
    {
        Session::flash('message', Lang::get('persian.ordersregisteredsuccess', array(), 'fa') );
    }

    public function received($model)
    {
        Session::flash('message', Lang::get('persian.ordersregisteredsuccess', array(), 'fa') );
    }        


	public function created($model)
	{
		Session::flash('message', Lang::get('persian.ordersregisteredsuccess', array(), 'fa') );
	}


	public function updated($model)
	{
		Session::flash('message', Lang::get('persian.update-order-success', array(), 'fa'));
	}

	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-order-success', array(), 'fa'));
	}

}

