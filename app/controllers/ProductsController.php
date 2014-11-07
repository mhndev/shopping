<?php
// require '../../kint/Kint.class.php';
class ProductsController extends BaseController {

	protected $layout = "layouts.master";


    public function __construct() {
    	$this->model = new Product;
    	$this->storeFilters = array('category_id' , 'created_at' , 'updated_at');
    	$this->editFilters  = array('id','image_big1','image_big2','image_big3', 'image_big4' , 'image_big5','image_small1','image_small2','image_small3','image_small4','image_small5','image_products' , 'image_showProduct', 'image_windows' , 'created_at','updated_at' ,'features' ,'tecdec' ,'video_path1' , 'category_id' , 'description');
    }	
	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$items = Category::find($id)->products()->paginate(9);
		$this->layout->content = View::make('products.index')
		->with(array('items'=>$items , 'id' => $id));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$lang = array();
		$cat = Category::find($id);
		//$features = $cat->features;
		$tecdecs = $cat->tecdec;
		// $features_json = json_decode($features);
		 $tecdecs_json  = json_decode($tecdecs);

		// if($features != "")
		// 	foreach($features_json as $index => $key)
		// 		$langFeatures[$index] = Lang::get('persian.'.$index , array() , 'fa');
		// else
		// 	$langFeatures = [];

		// if($features == '')
		// 	$features = 'empty';
		// if($tecdecs == '')
		// 	$features = 'empty';

		$this->layout->content = View::make('products.create')
		->with(array(/*'features'=>$features,'langFeatures'=>$langFeatures,*/'tecdec'=>$tecdecs,'langTecdecs'=>$tecdecs_json,'id'=>$id ));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$inputs = Input::all();
		$this->model->saveRecord($this->storeFilters);
		$this->model->category_id = $id;
		$this->model->features = "{'empty':'empty'}";
		$this->model->save();	
		return Redirect::to('admin/'.$id.'/products');
	}




	/**
	 * Display the specified resource.
	 * GET /products/{id}
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
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($cid , $pid)
	{
		$model = Product::find($pid);
		//$features = $model->features;
	//	$lang = array();
		// if($features != null)
		// 	$lang = $model->getLangJs($features);

		$cat = Category::find($cid);
		$tecdecs = $cat->tecdec;
		 $tecdecs_json  = json_decode($tecdecs);


		$this->layout->content = View::make('products.edit')
		->with(array('model'=>$model ,'tecdec'=>$tecdecs/* 'features'=>$features , 'select'=>$selects , 'lang'=>$lang , 'columns'=>$columns */));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($cid , $pid)
	{
		$model = Product::find($pid);
		$model->saveRecord($this->storeFilters);
		$model->category_id = $cid;
		$model->id = $pid;
		$model->save();
		return Redirect::to('admin/'.$cid.'/products');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($cid , $id)
	{
		$model = Product::find($id);
		$model->delete();
		return Redirect::back();
	}

	public function changeactivestate($cid , $id)
	{
		$item = Product::find($id);
		if($item->active == 0)
			$item->active = 1;
		else

			$item->active = 0;

		$item->save();
		return Redirect::back();
	}	

	public function changespecialstate($cid , $id)
	{
		$item = Product::find($id);
		if($item->special == 0)
			$item->special = 1;
		else

			$item->special = 0;

		$item->save();
		return Redirect::back();
	}	

}