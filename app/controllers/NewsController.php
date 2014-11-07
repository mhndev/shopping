<?php
//require '../../kint/Kint.class.php';
class NewsController extends BaseController {

	protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
		$model = new News;
		$items = $model->paginate(9);
		$this->layout->content = View::make('news.index')
		->with(array('items'=> $items ));		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /news/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
		$newModel = new News;
		$newModel->title = Input::get('title');
		$newModel->summary = Input::get('summary');
		$newModel->news = Input::get('news');
		$newModel->image_path1 = Input::get('image_path1');
		$newModel->image_path2 = Input::get('image_path2');
	    $newModel->save();	
	    return Redirect::to('admin/news');
	}

	/**
	 * Display the specified resource.
	 * GET /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$model = News::find($id);
		$this->layout->content = View::make('news.show')->with(array('model'=> $model ));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /news/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = News::find($id);		
		$this->layout->content = View::make('news.edit')->with(array('model'=> $model ));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$newModel = News::find($id);
		$newModel->title = Input::get('title');
		$newModel->summary = Input::get('summary');
		$newModel->news = Input::get('news');
		$newModel->image_path1 = Input::get('image_path1');
		$newModel->image_path2 = Input::get('image_path2');
		$newModel->save();
		return Redirect::to('admin/news');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$model = News::find($id);
		$model->delete();
		return Redirect::back();
	}


	public function changestate($id)
	{
		$model = News::find($id);
		if($model->publish == 0)
			$model->publish = 1;
		else

			$model->publish = 0;

		$model->save();
		return Redirect::back();		
	}
}