<?php
//require '../../kint/Kint.class.php';
class CommentsController extends BaseController {

	protected $layout = "layouts.master";
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function __construct() {
    	$this->model = new Comment;
    }	


	public function index($id)
	{
		$items = DB::table('comments')
	                ->join('users', 'users.id', '=', 'comments.user_id')	
	                ->join('products' , 'products.id' , '=' , 'comments.product_id')
	                ->where('products.id' , '=' , $id)
	                ->select('comments.id AS id' , 
	                	     'comments.name AS name' , 
	                	     'comments.email AS email' , 
	                	     'comments.publish AS publish' , 
	                	     'comments.plus AS plus' , 
	                	     'comments.minus AS minus' , 
	                	     'users.mobile AS mobile', 
	                	     'comments.text AS text',
	                	     'comments.product_id AS product_id'
	                	     )
	                ->paginate(8);

		$this->layout->content = View::make('comments.index')->with(array('items'=>$items));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($pid)
	{
		$newModel = new Comment;
		$newModel->plus = 0;
		$newModel->minus = 0;
		$newModel->text = Input::get('text');


		$newModel->publish = false;

		if(Auth::check() && Session::has('user.inf'))
		{
			$user = Session::get('user.inf');
			$userId = $user[0]['id'];
			$newModel->name  = $user[0]['firstname']." ".$user[0]['lastname'];
			$newModel->email = $user[0]['email'];
		}

		else	
		{
			$user = User::where('email' , '=' , 'guest')->firstOrFail();
			$userId = $user->id;
			$newModel->name = Input::get('name');
			$newModel->email = Input::get('email');			
			
		}

		$newModel->user_id = $userId;
		$newModel->product_id = $pid;
	    $newModel->save();	


	    return Response::json(array('status' => 'added'));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$comment = Comment::find($id);
		$this->layout->content = View::make('comments.show')->with(array('comment'=>$comments));

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
	public function destroy($pid , $cid)
	{
		$model = Comment::find($cid);
		$model->delete();
		//return Redirect::to('admin/'.$pid.'/comments');
		return Redirect::back();
	}

	public function getChangestate($pid , $cid)
	{
		$comment = Comment::find($cid);
		if($comment->publish == 0)
			$comment->publish = 1;
		else

			$comment->publish = 0;

		$comment->save();
		//return Redirect::to('admin/'.$pid.'/comments');
		return Redirect::back();				
	}	


}
