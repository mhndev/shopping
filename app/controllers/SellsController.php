<?php
class SellsController extends BaseController {

	protected $layout = "layouts.master";
	/**
	 * Display a listing of the resource.
	 * GET /sells
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$model = new Sell;
		$columns = array('id' , 'order_id' , 'product_id' , 'name' , 'price' , 'number');

		$items   = $model->where('order_id' , '=' , $id)->with('products');
		$items   = DB::table('sells')
							->join('products' , 'products.id' , '=' , 'sells.product_id')
							->where('sells.order_id' , '=' , $id)
							->get();
							
		$view    = 'admin/'.$id.'/sells';
		$this->layout->content = View::make('sells.index')
		->with(array('items'=>$items , 'columns'=>$columns , 'view'=>$view , 'id' => $id , 'type'=>'html'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sells/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$this->layout->content = View::make('sells.create')->with('id' , $id);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sells
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$model = new Sell;
		$model->products_id = Input::get('products_id');
		$model->orders_id = $id;
		$model->save();	
		return Redirect::to('admin/'.$id.'/sells')->with('message',Lang::get('persian.add-sell-success', array(), 'fa') );
	}

	/**
	 * Display the specified resource.
	 * GET /sells/{id}
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
	 * GET /sells/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($oid , $id)
	{
		$model = Sell::find($id);
		$this->layout->content = View::make('sells.edit')
		->with(array('model'=>$model ));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sells/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($oid , $id)
	{
		$model = Sell::find($id);
		$model->products_id = Input::get('products_id');
		//$model->orders_id = $oid;
		$model->save();
		return Redirect::to('admin/'.$oid.'/sells')
		->with('message', Lang::get('persian.update-sell-success', array(), 'fa'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sells/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($oid , $id)
	{
		$model = Sell::find($id);
		$model->delete();
		return Redirect::to('admin/'.$oid.'/sells')->with('message', Lang::get('persian.delete-sell-success', array(), 'fa'));
	}

}