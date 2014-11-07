<?php


View::composer('categories.create', function($view) {
	$createFilters = array('created_at' , 'updated_at' , 'image_path1' , 'image_path2' , 'image_path3' , 'features' , 'tecdec' , 'id');
	$model = new Category;
	$columns = $model->getThisColumnsNames()->filterColumnNames('categories',$createFilters);
    $view->with('columns', $columns);
});


View::composer('categories.index', function($view) {
	$model = new Category;
	$indexFilters  = array('image_path1','image_path2','image_path3','updated_at' ,'features' , 'created_at' , 'tecdec');
    $columns = $model->getThisColumnsNames()->filterColumnNames('categories',$indexFilters);
    $items = $model->getAll($indexFilters)->getQuery()->paginate(9);
    $myView = 'admin/categories';
    $view->with(array('columns'=>$columns , 'items'=>$items , 'view'=>$myView));
});


//***********************************************************************************************


View::composer('front.index', function($view) {
	$offed = Product::where('deals', '>', 0)->orderBy('created_at' , 'DESC')->take(3)->get();
	$sliders = Slider::orderBy('priority')->get();
	$specs = Product::where('special' , '=' , 1)->orderBy('created_at' , 'DESC')->take(4)->get();
	$last_products = Product::orderBy('created_at', 'DESC')->take(8)->get();
	$last_news = News::orderBy('created_at' , 'DESC')->take(4)->get();
	$most_selled = DB::table('products')
	                        ->join('sells', 'products.id', '=', 'sells.product_id')
	                        ->select(DB::raw('products.*, COUNT(*) AS total_sells'))
	                        ->groupBy('products.id')
	                        ->orderBy('total_sells', 'DESC')
	                        ->take(4)
	                        ->get();


	$slider_settings = DB::table('slider-settings')->first();
	$var = array('lastProducts'=>$last_products ,'lastNews'=>$last_news , 'mostSelled'=>$most_selled ,'offed'=>$offed , 'specs'=>$specs ,'sliders'=>$sliders , 'slider_settings'=>$slider_settings);                
	$view->with('var' , $var);
});


// View::composer('front.search', function($view) {
//     $select = array('products.id' , 'products.name','products.company','products.price','products.deals',
//     'products.features','products.special','products.active','products.image_products' , 'categories.features AS params');

//    	$results = DB::table('products')
//     ->join('categories' , 'categories.id', '=', 'products.category_id')
//     ->where('categories.name' , '=' , $catName)
//     ->where('products.company' , '=' , $company)
//     ->select($select)
//     ->paginate(8);


//     $view->with('results' , $results);
// });


//****************************************************************************************************
?>