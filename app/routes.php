 <?php

Route::group(array('prefix' => 'admin' , 'before' => 'auth|admin' ), function()
{
	Route::resource('menus', 'MenusController');
	Route::resource('users','UserresourcesController');
	Route::resource('categories' ,'CategoriesController');
	Route::resource('news','NewsController');
	Route::resource('sliders','SlidersController');
	Route::resource('tests','TestsController');
	Route::resource('orders','OrdersController');
	Route::resource('{id}/sells','SellsController');
	Route::resource('{cid}/products','ProductsController');
	Route::resource('{id}/comments','CommentsController');
	Route::get('users/changestate/{id}','UserresourcesController@getChangestate');
	Route::get('slider/setting','SlidersController@setting');
	Route::post('slider/setting','SlidersController@settingpost');
	Route::get('{pid}/comments/changestate/{cid}','CommentsController@getChangestate');
	Route::get('menus/changestate/{id}','MenusController@changestate');
	Route::get('news/changestate/{id}','NewsController@changestate');	
	Route::get('sliders/changestate/{id}','SlidersController@getChangestate');
	Route::get('sliders/goup/{id}','SlidersController@getGoup');
	Route::get('sliders/godown/{id}','SlidersController@getGodown');
	Route::get('{cid}/products/activestate/{id}','ProductsController@changeactivestate');
	Route::get('{cid}/products/specialstate/{id}','ProductsController@changespecialstate');
    Route::get('comments/changestate/{pid}/{cid}','CommentsController@getChangestate');


    Route::delete('{pid}/comments/{cid}', 'CommentsController');


	Route::get('orders/changepayedstate/{id}','OrdersController@getChangepayedstate');
	Route::get('sitedisable','AdminController@getSitedisable');
	Route::post('sitedisable','AdminController@postSitedisable');
	Route::get('orders/changesentstate/{id}','OrdersController@getChangesentstate');
	Route::get('orders/changereceivedstate/{id}','OrdersController@getChangereceivedstate');
	Route::get('orders/{id}/factor','OrdersController@getFactor');
	Route::get('users/passreset/{id}','UserresourcesController@getpassreset');
	Route::post('users/passreset/{id}','UserresourcesController@postpassreset');
	Route::get('dashboard','AdminController@showWelcome');
	Route::get('footer','AdminController@getFooter');
	Route::post('footer','AdminController@postFooter');
	Route::get('changepass','AdminController@getChangepass');
	Route::post('changepass','AdminController@postChangepass');	
	Route::get('contactusmngt','AdminController@contactusmngt');
	Route::delete('contactus/{id}','AdminController@contactdestroy');
	Route::get('elfinder','Barryvdh\Elfinder\ElfinderController@showIndex');
	Route::any('elfinder/connector','Barryvdh\Elfinder\ElfinderController@showConnector');
	Route::get('elfinder/tinymce','Barryvdh\Elfinder\ElfinderController@showTinyMCE4');
	Route::get('elfinder/ckeditor4','Barryvdh\Elfinder\ElfinderController@showCKeditor4');
	Route::get('elfinder/standalonepopup/{input_id}','Barryvdh\Elfinder\ElfinderController@showPopup');
 });



// $record = DB::table('siteconfigs')->first();
// if($record->disable == 0)
// {
// 	Route::get('/{siteDisable?}' , function(){
// 		echo 'We will back soon';
// 	})->where('siteDisable', '(.*)');
// }



Route::get('/test','TestsController@index');
Route::get('/','IndexController@getIndex');
Route::get('/basket','IndexController@getBasket');
Route::post('/pay' , 'IndexController@confirmandpay');
Route::post('/paypost' , 'IndexController@paypost');
Route::get('/addtocart/{id}','IndexController@getAddtocart');
Route::get('/removefromcart/{id}','IndexController@getRemovefromcart');
Route::get('/products/show/{id}','IndexController@showProduct');
Route::get('/contactus','IndexController@getContactus');
Route::post('/contactus','IndexController@postContactus');
Route::get('/product/{id}','HomeController@getproduct');
Route::get('/news/{id}','IndexController@news');
Route::get('/{category}','IndexController@showCategory');
Route::get('/menu/{name}' , 'IndexController@menu');
Route::get('/search/{category}/{company}/{features?}', 'IndexController@getSearch')->where('features', '(.*)');
Route::get('/products/{category}/{features?}','IndexController@showCategory')->where('features', '(.*)');
Route::post('/sesscount','IndexController@sesscount');
Route::controller('auth','UsersController' , array('before'=>'guest'));

// Route::get('/start', function()
// {
//     $admin = new Role();
//     $admin->name = 'admin';
//     $admin->save();
 
//     $customer = new Role();
//     $customer->name = 'customer';
//     $customer->save();

    
 
//     // $read = new Permission();
//     // $read->name = 'can_read';
//     // $read->display_name = 'Can Read Posts';
//     // $read->save();
 
//     // $edit = new Permission();
//     // $edit->name = 'can_edit';
//     // $edit->display_name = 'Can Edit Posts';
//     // $edit->save();
 
//     // $subscriber->attachPermission($read);
//     // $author->attachPermission($read);
//     // $author->attachPermission($edit);
 
//     // $user1 = User::find(1);
//     // $user2 = User::find(2);
 
//     // $user1->attachRole($subscriber);
//     // $user2->attachRole($author);
 
//     return 'Woohoo!';
// });




// Route::get('/secret', function()
// {
//     Auth::loginUsingId(1);
 
//     $user = Auth::user();
 
//     if ($user->hasRole('Author'))
//     {
//         return 'Redheads party the hardest!';
//     }
 
//     return 'Many people like to party.';
// });


// Route::get('/secret', function()
// {
//     Auth::loginUsingId(2);
 
//     $user = Auth::user();
 
//     if ($user->hasRole('Author'))
//     {
//         return 'Redheads party the hardest!';
//     }
 
//     return 'Many people like to party.';
// });



//  Route::get('/test', function(){
// 	var_dump( Shamsi::toJalali(Product::firstOrFail()->created_at));
// });


// Route::get('/test', function(){
//  	$data = array('salam');
// Mail::send('emails.test', $data, function($message) {
//     $message->to('majid_hosseini70@yahoo.com', 'Jon Doe')->subject('Welcome to the Laravel 4 Auth App!');
// });

 	// $user = User::orderBy('created_at' , 'desc')->firstOrFail();
 	// var_dump($user['email']);
//});
