<?php
class MenusController extends BaseController {


	protected $layout = "layouts.master";
	
	public function __construct()
	{
		$this->model = new Menu;
	}
	/**
	 * Display a listing of the resource.
	 * GET /menus
	 *
	 * @return Response
	 */
	public function index()
	{
		$menus = Menu::paginate(8);
		$this->layout->content = View::make('menus.index')->with(array('menus'=>$menus));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /menus/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('menus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /menus
	 *
	 * @return Response
	 */
	public function store()
	{
		$menu = new Menu;
		$menu->name = Input::get('name');
		$menu->faname = Input::get('faname');
		$menu->enable = Input::get('enable');
		$menu->body = Input::get('body');
		$menu->save();


		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /menus/{id}
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
	 * GET /menus/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = Menu::find($id);		
		$this->layout->content = View::make('menus.edit')->with(array('model'=> $model ));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /menus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$model = Menu::find($id);
		$model->name = Input::get('name');
		$model->faname = Input::get('faname');
		$model->enable = Input::get('enable');
		$model->body = Input::get('body');
		$model->save();
		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /menus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$model = Menu::find($id);
		$model->delete();
		return Redirect::back();
	}

	public function changestate($id)
	{
		$menu = Menu::find($id);
		if($menu->enable == 0)
			$menu->enable = 1;
		else

			$menu->enable = 0;

		$menu->save();
		return Redirect::back();
	}

}