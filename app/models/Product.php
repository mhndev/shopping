<?php
use Illuminate\Events\Dispatcher;
class Product extends Magniloquent {
	
	public $table = 'products';

	public function category()
	{
		return $this->belongsTo('Category');
	}
	public function comments()
	{
		return $this->hasMany('Comment');
	}		
	public function productimages()
	{
		return $this->hasMany('Productimage');
	}		
	public function videos()
	{
		return $this->hasOne('video');
	}	

    public static function boot()
    {
        parent::boot();
        Product::observe(new ProductObserver(new Dispatcher()));
    }	
			
}