<?php
use Illuminate\Events\Dispatcher;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Magniloquent implements UserInterface, RemindableInterface  {
	public $table = 'users';
	public static $rules = array('firstname' => 'required|alpha|min:2', 
								 'lastname' => 'required|alpha|min:2',
								 'email' => 'required|email|unique:users',
								 'mobile'=>'required|numeric|digits_between:10,11|unique:users',
								 'password' => 'required|alpha_num|between:6,12|confirmed',
								 'password_confirmation' => 'required|alpha_num|between:6,12');



	public static function boot()
    {
        parent::boot();
        User::observe(new UserObserver(new Dispatcher));
    }


	use HasRole;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */


    	
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}


	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}