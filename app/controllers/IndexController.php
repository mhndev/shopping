<?php
//require '../../kint/Kint.class.php';
class IndexController extends BaseController {

	protected $layout = 'layouts.front';

	public function __construct() {
	    $menus = Menu::where('name' , '!=' , 'footerText')->get();
	    $footer = Menu::where('name' , '=' , 'footerText')->firstOrFail();
	    View::share('menus',$menus);
	    View::share('footer',$footer);
	}	

	private $current = array('advancesearchCurrent' => '',
							 'homeCurrnet' => '',
							 'addstoreCurrent' => '',
							 'requeststoreCurrent' => '',
							 'abouteusCurrent' => '',
							 'contactusCurrent' => '',
							 'guideCurrent' => '');

	public function setCurrent($key)
	{
		$this->current[$key] = 'current';
	}	
	/**
	 * Display a listing of the resource.
	 * GET /index
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$this->layout->title = "index";
		$this->layout->content = View::make('front.index');		
	}

	public function getSearch($catName , $company , $features = null)
	{
		$this->layout->title = "search";

            $select = array('products.id' , 'products.name','products.company','products.price','products.deals',
            'products.features','products.special','products.active','products.image_products' , 'categories.features AS params');

           	$results = DB::table('products')
            ->join('categories' , 'categories.id', '=', 'products.category_id')
            ->where('categories.name' , '=' , $catName)
            ->where('products.company' , '=' , $company)
            ->select($select)
            ->paginate(8);

		if($features) 
        {
            $lib = new JsonQuery($features);
            $results = $lib->queryJson($results);
        }
        $params = $results[0]->params;
		$this->layout->content = View::make('front.search')->with(array('results'=>$results , 'params'=> $params));	
	}

	public function showCategory($category , $features = null){
		$select = array('products.id' , 'products.name','products.company','products.price','products.deals',
        'products.features','products.special','products.active','products.image_products' /*, 'categories.features AS params' */);


		$products = DB::table('categories')
							   ->join('products' , 'categories.id' , '=' , 'products.category_id')
							   ->where('categories.name' , '=' , $category)
							   ->orderBy('products.created_at' , 'DESC')
							   ->select($select)
							   ->paginate(8);
	//  if($features)  {   $lib = new JsonQuery($features);  $products = $lib->queryJson($products); }
    //    $params = $products[0]->params;							   
		$this->layout->content = View::make('front.showCategory')->with(array('products'=>$products /*, 'params'=>$params */));	
	}

	public function showProduct($id){
		$product = Product::find($id);
		$comments = $product->comments()->where('publish' , '=' , '1')->orderBy('created_at')->get();
		$this->layout->content = View::make('front.showProduct')->with(array('product'=>$product , 'comments'=>$comments));
	}


	public function news($id){
		$model = News::find($id);
		if($model->publish == 1)
			$this->layout->content = View::make('front.news')->with(array('news'=>$model));
		else
			App::abort(404);
	}


	public function getBasket(){
		if(Session::has('user.basket')){
			$basket = Session::all();
			$basket = $basket['user']['basket'];
			$data = array('basket'=>$basket);
		}
		else{
			$data = array('empty');
		}
		$view = View::make('layouts.empty')->nest('content', 'front.basket' , $data);
		return $view;
		//$this->layout->content = View::make('front.basket')->with(array('basket'=>$basket ));	
	}

	public function getAddtocart($id){
		$index = 0;
		$basket = Session::get('user.basket');
		$exist = false;
		for($i=0;$i<count($basket);$i++){
			if($basket[$i]['id'] == $id){
				$exist = true;
				$index = $i;
				break;
			}
		}

		if($exist == false){
			$product = Product::find($id)->toArray();
			$product['number'] = 1;
			Session::push('user.basket', $product );
		}
		else{
			$basket[$index]['number']++;
			Session::put('user.basket' , $basket);
		}

		return Response::json(array('status' => 'added'));
	}

	public function getRemovefromcart($id){
		$old = Session::get('user.basket');
		$index = 0;
		for($i=0;$i<count($old);$i++){
			if($old[$i]['id'] == $id){
			$index = $i; break; }
		}
		array_splice($old,$index,1);
		Session::put('user.basket', $old);
		return Response::json(array('data'=>Session::get('user.basket')));
	}

	public function confirmandpay(){
		$numbers = Input::all();
		array_splice($numbers, 0, 1);
		$users = Session::get('user.basket');

		$i = 0;
		foreach($numbers as $key => $value){
			$users[$i]['number'] = $value;
			$i++;
		}

		Session::put('user.basket', $users);
		$this->layout->content = View::make('front.pay');		
	}

	public function paypost(){		
		$address = Input::get('address');
		$paytype = Input::get('paytype');
		$payid = Input::get('payid');
		$phone = Input::get('phone');

		if(Session::has('user.info'))
		{
			$user = Session::get('user.inf');
			$userId = $user[0]['id'];
		}
		else
		{
			$user = User::where('email' , '=' , 'guest')->firstOrFail();
			$userId = $user->id;
		}
		$basket = Session::get('user.basket');
		$order = new Order;
		$order->paytype  = $paytype;
		$order->address  = $address;
		$order->payid    = $payid;
		$order->phone    = $phone;
		$order->sent     = false;
		$order->received = false;
		$order->user_id  = $userId;
		$order->save();	

		for($i=0;$i<count($basket);$i++){
			$sell = new Sell;
			$sell->product_id = $basket[$i]['id'];
			$sell->order_id   = $order->id;
			$sell->number     = $basket[$i]['number'];
			$sell->save();
		}
		Session::forget('user.basket');
		$this->layout->content = 'empty';	
		return Redirect::to('/')->with('message', Lang::get('persan.ordersregisteredsuccess' , array() , 'fa'));
	}


	public function menu($name){
		$menu = Menu::where('name' , '=' , $name)->firstOrFail();
		$this->layout->content = View::make('front.menu')->with(array('menu'=>$menu));
	}

	public function sesscount(){
		$count = count(Session::get('user.basket'));
		return Response::json(array('count' => $count));
	}


	public function getContactus()
	{
		$this->layout->content = View::make('front.contactus');
		self::setCurrent('contactusCurrent');
		View::share('current', $this->current);
	}
	public function postContactus()
	{
		$validator = Validator::make(Input::all(), Contactus::$rules);
		if ($validator->passes()) {
			$msg = new Contactus;
			$msg->name = Input::get('name');
			$msg->email = Input::get('email');
			$msg->description = Input::get('description');
			$msg->save();
		return Redirect::to('contactus')->with('message', 'با تشکر از تماس شما');
		}else{
			return Redirect::to('contactus')->with('message', 'خطاهای زیر اتفاق افتاده است')->withErrors($validator)->withInput();
		}
	}
}