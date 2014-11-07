<?php

class UserresourcesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected  $layout = 'layouts.master';

	public function index()
	{
		$users = User::all();
		$this->layout->content = View::make('userresources.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('userresources.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), User::$rules);
		if ($validator->passes()) {
			 $user = new User;
			 $user->firstname = Input::get('firstname');
			 $user->lastname = Input::get('lastname');
			 $user->email = Input::get('email');
			 $user->mobile = Input::get('mobile');
			 $user->lastlogin = date('Y-m-d H:i:s');
			 $user->password = Hash::make(Input::get('password'));
			 $user->save();	
			 $customer = Role::where('name' , '=' , 'customer')->firstOrFail();
			 $user->attachRole($customer);

			return Redirect::to('admin/users')->with('message', Lang::get('persian.Thanksforregistering' , array() , 'fa'));

		} else {
			return Redirect::to('admin/users/create')->with('message', 'The following error occured')->withErrors($validator)->withInput();
		}



		$user = new User;
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->mobile = Input::get('mobile');
		$user->enable = Input::get('enable');
		$user->lastlogin = date('Y-m-d H:i:s');
		$user->password = Input::get('password');
		$user->save();
		return Redirect::to('admin/users');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$model = User::find($id);
		$this->layout->content = View::make('userresources.show')->with(array('model'=> $model ));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = User::find($id);		
		$this->layout->content = View::make('userresources.edit')->with(array('model'=> $model ));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$newModel = User::find($id);
			$newModel->firstname = Input::get('firstname');
			$newModel->lastname = Input::get('lastname');
			$newModel->email = Input::get('email');
			$newModel->enable = Input::get('enable');
			$newModel->save();
			return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$model = User::find($id);
		$model->delete();
		return Redirect::to('admin/users');
	}



	public function getChangestate($id)
	{
		$user = User::find($id);
		if($user->enable == 0)
			$user->enable = 1;
		else

			$user->enable = 0;

		$user->save();
		$event = Event::fire('changestate');
		return Redirect::back();				
	}

	public function getPassreset($id)
	{
		$user = User::find($id);
		$this->layout->content = View::make('userresources.passreset')->with('user' , $user);
	}

	public function postPassreset($id)
	{
		if(Input::get('password') === Input::get('password_confirmation')){
			$user = User::find($id);
			$user->password = md5(Input::get('password'));
			$user->save();
			return Redirect::back()->with('message', Lang::get('persian.chnagepasssuccess' , array() , 'fa'));
		}
		else{
			return Redirect::back()->with('message', Lang::get('persian.passessnotmatched' , array() , 'fa'));
		}
		
	}


}
