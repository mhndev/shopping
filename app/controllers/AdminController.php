<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected  $layout = 'layouts.master';

	public function showWelcome()
	{
		$this->layout->title = "Admin";
		$this->layout->content = View::make('admin.dashboard')->with('message' , Lang::get('persian.welcome-message' , array() , 'fa'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function contactusmngt()
	{
		$messages = Contactus::all();
		$this->layout->content = View::make('admin.contactusmngt')->with('messages', $messages);
	}

	public function contactdestroy($id)
	{
		$model = Contactus::find($id);
		$model->delete();
		return Redirect::to('admin/contactusmngt')->with('message', Lang::get('persian.delete-message-success' , array() , 'fa'));
	}	

	// public function postSitedisable()
	// {
	// 	if()
	// 		return Redirect::to('admin/dashboard')->with('message', Lang::get('persian.site-disable-successfull' , array() , 'fa'));	
	// 	else
	// 		return Redirect::to('admin/dashboard')->with('message', Lang::get('persian.site-enable-successfull' , array() , 'fa'));
	// }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}



	/**
	 * Display the specified resource./////////////////////////////////////////////////////////////////////////////////////////////////
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getFooter()
	{
		$footer_text = Menu::where('name' , '=' , 'footertext')->firstOrFail();
		$this->layout->content = View::make('admin.footertext')->with(array('text'=>$footer_text));
	}

	public function postFooter()
	{
		$newModel =  Menu::where('name' , '=' , 'footertext')->firstOrFail();
		$newModel->body = Input::get('text');
	    $newModel->save();	
	    return Redirect::to('admin/dashboard')->with('message', Lang::get('persian.footertext-updated' , array() , 'fa'));	
	}	

	public function getChangepass()
	{
		$this->layout->content = View::make('admin.changepass');
	}

	public function postChangepass()
	{
		$user = User::first();

		if (Hash::check(Input::get('oldPass'), $user->password)) {
			$user->password = Hash::make(Input::get('newPass'));
			$user->save();
			return Redirect::to(URL::current())->with('message', 'رمز با موفقیت تغییر کرد');
		}
		else{
			return Redirect::to(URL::current())->with('message', 'رمز فعلی را صحیح وارد نکرده اید');
		}
	}	

	public function getSiteDisable()
	{
		$record = DB::table('siteconfigs')->first();
		$this->layout->content = View::make('admin.sitedisable')->with('record',$record);
	}

	public function postSiteDisable()
	{
		$disable = Input::get('disable');

		DB::table('siteconfigs')
            ->where('id', 1)
            ->update(array('disable' => $disable));

        return Redirect::to('admin/dashboard');    
	}

}
