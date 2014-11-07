<?php
use Illuminate\Events\Dispatcher;
class Order extends Magniloquent {
	public $table = 'orders';

	public function sells()
	{
		return $this->hasMany('Sell');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}	

    public static function boot()
    {
        parent::boot();
        Order::observe(new OrderObserver(new Dispatcher));
    }	


}