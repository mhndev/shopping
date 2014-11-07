<?php
use Illuminate\Events\Dispatcher;
class Category extends Magniloquent {
	public $table = 'categories';
	public function products()
	{
		return $this->hasMany('Product');
	}

	public function categoryimages()
	{
		return $this->hasMany('Categoryimage');
	}	

    public static function boot()
    {
        parent::boot();
        Category::observe(new CategoryObserver(new Dispatcher));
    }	

}