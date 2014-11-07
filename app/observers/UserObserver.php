<?php
use Illuminate\Events\Dispatcher;
class UserObserver
{

    protected $events;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

	public function created($model)
	{
		Session::flash('message', Lang::get('persian.Thanksforregistering', array(), 'fa') );
		$data = array('name'=>$model->name);
		
		Mail::send('emails.mail', $data, function($message) use ($model){
    		$message->to($model['email'], 'Khaneye Kala')->subject('Welcome to Khaneye kala !');
    	});
	}


	public function updated($model)
	{
		Session::flash('message', Lang::get('persian.update-product-success', array(), 'fa'));
	}


	public function deleted($model)
	{
		Session::flash('message', Lang::get('persian.delete-product-success', array(), 'fa'));
	}

}

