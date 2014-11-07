<?php
use Illuminate\Events\Dispatcher;
class Comment extends Magniloquent {
	protected $fillable = [];
	public $table = 'comments';


	public function user()
	{
		return $this->belongsTo('User');
	}	

	public function product()
	{
		return $this->belongsTo('Product');
	}	

    public static function boot()
    {
        parent::boot();
        Comment::observe(new CommentObserver(new Dispatcher));
    }		

}