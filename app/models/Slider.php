<?php
use Illuminate\Events\Dispatcher;
class Slider extends Magniloquent {
	protected $fillable = [];
	public $table = 'sliders';

    public static function boot()
    {
        parent::boot();
        Slider::observe(new SliderObserver(new Dispatcher));
    }	
}