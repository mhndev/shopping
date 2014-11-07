<?php
//require '../../kint/Kint.class.php';
class OrdersController extends BaseController {

	protected $layout = "layouts.master";
	/**
	 * Display a listing of the resource.
	 * GET /orders
	 *
	 * @return Response
	 */
	public function index()
	{
		$model = new Order;
		$filters1 = array('updated_at','user_id' , 'payed' , 'sent' , 'received' );
		$filters2 = array('id','created_at','updated_at' ,'signdate' ,'address' , 'cardnum' , 'password' , 'remember_token' , 'email'  , 'lastlogin' , 'enable');
		$columns = $model->getThisColumnsNames()->filterColumnNames('orders',$filters1);
		$joins = $model->getColumnsNames('users')->filterColumnNames('users',$filters2);
		$columns = array_merge($columns , $joins);
		$columns2 [] = 'payed';
		$columns2 [] = 'sent';
		$columns2 [] = 'received';

		$items   = DB::table('users')
							->join('orders' , 'users.id' , '=' , 'orders.user_id')
							->paginate(9);


		//$items = $model->getAllJoin('users' , $filters1 , $filters2)->getResults();
		$view = 'admin/orders';
		$this->layout->content = View::make('orders.index')
		->with(array('items'=> $items , 'columns'=>$columns , 'columns2'=>$columns2, 'view'=>$view));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /orders/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('orders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /orders
	 *
	 * @return Response
	 */
	public function store()
	{
		$newModel = new Order;
		$newModel->time = Input::get('time');
		$newModel->sent = Input::get('sent');
		$newModel->received = Input::get('received');
		$newModel->users_id = Input::get('user');
		$newModel->save();	
		return Redirect::to('admin/orders');
	}

	/**
	 * Display the specified resource.
	 * GET /orders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$filters1 = array('image_big1','image_big2','image_big3', 'image_big4' , 'image_big5', 'persianName','image_small1','image_small2','image_small3','image_small4','image_small5','image_products' , 'image_showProduct', 'image_windows' , 'created_at','updated_at' ,'features' ,'tecdec' ,'video_path1' , 'category_id' , 'description');
		$model = Order::find($id);
		$sells = $model->sells;
		$products = [];
		$view = 'admin/orders';
		$columns = $model->getColumnsNames('products')->filterColumnNames('products',$filters1);
		foreach($sells as $sell){
			$product = Product::find($sell->product_id);
			$products[] = $product;
		}

		$this->layout->content = View::make('orders.show')->with(array('items'=>$products , 'columns'=>$columns , 'view'=>$view));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /orders/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = Order::find($id);
		$this->layout->content = View::make('orders.edit')->with('model', $model);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /orders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function update($id)
	// {
	// 	$newModel = Order::find($id);
	// 	$newModel->time = Input::get('time');
	// 	$newModel->sent = Input::get('sent');
	// 	$newModel->received = Input::get('received');
	// 	$newModel->users_id = intval(Input::get('users_id'));
	// 	$newModel->save();
	// 	return Redirect::to('admin/orders')
	// 	->with('message', Lang::get('persian.update-order-success', array(), 'fa'));
	// }

	/**
	 * Remove the specified resource from storage.
	 * DELETE /orders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$model = Order::find($id);
		$model->delete();
		return Redirect::to('admin/orders');	
	}


	public function getChangepayedstate($id)
	{
		$order = Order::find($id);
		if($order->payed == 0)
			$order->payed = 1;
		else

			$order->payed = 0;

		$order->save();
		return Redirect::back();				
	}

	public function getChangesentstate($id)
	{
		$order = Order::find($id);
		if($order->sent == 0)
			$order->sent = 1;
		else

			$order->sent = 0;

		$order->save();
		return Redirect::back();			
	}	

	public function getChangereceivedstate($id)
	{
		$order = Order::find($id);
		if($order->received == 0)
			$order->received = 1;
		else

			$order->received = 0;

		$order->save();
		return Redirect::back();				
	}	

	public function getFactor($id)
	{
		
	$model = new Sell;
	$columns = array('id' , 'order_id' , 'product_id' , 'name' , 'price' , 'number');

	$items   = $model->where('order_id' , '=' , $id)->with('products');
	$items   = DB::table('sells')
						->join('products' , 'products.id' , '=' , 'sells.product_id')
						->where('sells.order_id' , '=' , $id)
						->get();


	$order = Order::find($id);
	$user = $order->user;
					

	$view    = 'admin/'.$id.'/sells';
	$sum = 0; 
	foreach($items as $item){
		$sum += $item->price;
	}
	$my_html = '<HTML>';
	$my_html .= "<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">"; 
	
	$my_html .= "<div style='font-size:20px; margin-right:310px; font-weight:bold; float:right; text-align:right; direction:rtl'>".Lang::get('persian.factorSell' , array() , 'fa')."</div>";
	
	$my_html .= "<br>";

	$my_html .= "<div style='float:right'>
					<div style='clear:both;float:right'>
						<div style='clear:both;float:right;text-align:right; direction:rtl;width:200px;'>".
							Lang::get('persian.factorIndex' , array() , 'fa')." : ".$id.
						"</div>";
	

	$my_html .= "<div style='clear:both;text-align:right; direction:rtl;width:200px;'>".
		Lang::get('persian.customerName' , array() , 'fa')." : ".
		$user->firstname."&nbsp&nbsp".$user->lastname.
		"</div></div>";


	$my_html .= "<div style='text-align:right; direction:rtl;width:300px; font-family:yekan' >".
		Lang::get('persian.dateAndTime' , array() , 'fa')."&nbsp&nbsp:&nbsp&nbsp".
			Shamsi::toJalali($order->created_at).
			"</div><br><br><br>";
	
	$my_html .= (string) View::make('sells.index')->with(array('items'=>$items , 'columns'=>$columns , 'view'=>$view , 'id' => $id , 'type'=>'pdf'))->render();

	$my_html .= "<hr/><div style='float:right; text-align:right; direction:rtl; margin-right:200px; font-size:17px;'>".Lang::get('persian.sum' , array() , 'fa')."&nbsp&nbsp:<span style='margin-right:10px;'>".$sum."&nbsp&nbsp".Lang::get('persian.toman' , array() , 'fa')."</span></div>";

	$my_html .= "<br><br><br>".Lang::get('persian.khaneyekalastore' , array() , 'fa');

	$my_html .= '</HTML>';
    $pdf_options = array(
      "encoding" => 'UTF-8',
      "source_type" => 'html',
      "source" => $my_html,
      "action" => 'save',
      "save_directory" =>  app_path().'/../public/files/pdf',
      "file_name" => 'factor.pdf'
      );

    Phptopdf::phptopdf($pdf_options);
    return Response::download( app_path().'/../public/files/pdf/factor.pdf');
	}

}