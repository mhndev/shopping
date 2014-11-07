<?php
use Illuminate\Events\Dispatcher;

class NewsObserver
{

    protected $events;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

    public function saving($model)
    {
        if ($model->isDirty(['publish']))
        {
            $this->changeState($model);
        }
    }	

    public function changeState($model)
    {
        if($model->publish == 1)
            Session::flash('message', Lang::get('persian.enableNews', array(), 'fa'));
        else
            Session::flash('message', Lang::get('persian.disableNews', array(), 'fa'));

    }


    public function created($model)
    {
        Session::flash('message', Lang::get('persian.news-added-success', array(), 'fa') );
    }


    public function updated($model)
    {
        if(  count($model->getDirty()) > 2 || 
            (count($model->getDirty()) == 2 && !$model->isDirty(['publish']) ) 
          ){        
            Session::flash('message', Lang::get('persian.update-news-success', array(), 'fa'));
        }
    }


    public function deleted($model)
    {
        Session::flash('message', Lang::get('persian.delete-news-success', array(), 'fa'));
    }

}

