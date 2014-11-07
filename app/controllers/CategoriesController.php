<?php
class CategoriesController extends BaseController {
	protected $layout = "layouts.master";
	
	public function __construct()
	{
		$this->model = new Category;
	}
	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->content = View::make('categories.index');
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('categories.create');
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$this->model->saveRecord(array('created_at' , 'updated_at'));
		//$this->model->saveTOLanguageFile('newItemFeatures' , $this->model->features);
	    $this->model->save();	
	    return Redirect::to('admin/categories');
	}
	/**
	 * Display the specified resource.
	 * GET /categories/{id}
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
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = Category::find($id);
		$features = 'empty';//$model->features;
		//$lang = $model->getLangJs($features);
		$this->layout->content = View::make('categories.edit')->with(array('model'=> $model /*, 'lang'=>$lang */));
	}
	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$newModel = Category::find($id);
		$newModel->saveRecord(array('id' ,'created_at' , 'updated_at'));
		$newModel->save();
		return Redirect::to('admin/categories');
	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$model = Category::find($id);
		$model->delete();
		return Redirect::back();
	}
}