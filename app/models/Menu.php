<?php
use Illuminate\Events\Dispatcher;
class Menu extends Magniloquent {
	protected $fillable = [];
	public $table = 'menus';

    public static function boot()
    {
        parent::boot();
        Menu::observe(new MenuObserver(new Dispatcher));
    }	
}