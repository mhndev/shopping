<?php

	class UsersController extends BaseController
	{	
		protected $layout = "layouts.front";

		public function __construct() {
 		    $this->beforeFilter('csrf', array('on'=>'post'));
 		    $this->beforeFilter('auth', array('only'=>array('getDashboard')));
 		    $menus = Menu::all();
 		    $footer = Menu::where('name' , '=' , 'footerText')->firstOrFail();
 		    View::share('footer',$footer);
	        View::share('menus', $menus);
		}		
		
		public function getRegister() {
			$this->layout->content = View::make('users.register');
		}

		public function postCreate(){
			
			$validator = Validator::make(Input::all(), User::$rules);
			if ($validator->passes()) {
				 $user = new User;
				 $user->firstname = Input::get('firstname');
				 $user->lastname = Input::get('lastname');
				 $user->email = Input::get('email');
				 $user->mobile = Input::get('mobile');
				 $user->password = Hash::make(Input::get('password'));
				 $user->save();	
				 $customer = Role::where('name' , '=' , 'customer')->firstOrFail();
				 $user->attachRole($customer);

				return Redirect::to('auth/login');

			} else {
				return Redirect::to('auth/register')->with('message', 'The following error occured')->withErrors($validator)->withInput();
			}
			
		}

		public function getLogin()
		{
			$this->layout->content = View::make('admin.login');
		}


		public function postSignin()
		{
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')),false)) {
				$user = User::where('email' , '=' , Input::get('email'))->get()->toArray();
				Session::set('user.inf' , $user);
			    return Redirect::to('/')->with('message', Lang::get('persian.loggedIn' , array() , 'fa'));
			} 
			else {
				return Redirect::to('auth/login')
		        ->with('message', Lang::get('persian.userOrPassIncorrect' , array() , 'fa'))
		        ->withInput();
			}
		}

		public function getDashboard()
		{
			$this->layout->content = View::make('admin.dashboard');
		}

		public function getLogout() 
		{
			if(Auth::check())
				Auth::logout();
			
			return Redirect::to('auth/login')->with('message', Lang::get('persian.loggedOut' , array() , 'fa'));
		}

	}
?>