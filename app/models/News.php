<?php
use Illuminate\Events\Dispatcher;
class News extends Magniloquent {
	
	protected $fillable = [];
	public $table = 'news';


    public static function boot()
    {
        parent::boot();

        News::observe(new NewsObserver(new Dispatcher));
    }	
    
}