<?php
class SlidersController extends BaseController {

	protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 * GET /sliders
	 *
	 * @return Response
	 */
	public function index()
	{
		$model = new Slider;
		$items   = $model->orderBy('priority')->paginate(8);
		$this->layout->content = View::make('sliders.index')
		->with(array('sliders'=> $items));		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sliders/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('sliders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sliders
	 *
	 * @return Response
	 */
	public function store()
	{
		$newModel = new Slider;
		$max = DB::table('sliders')->max('priority');
		$newModel->priority = $max+1;
		$newModel->enable = Input::get('enable');
		$newModel->param1 = Input::get('param1');
		$newModel->param2 = Input::get('param2');
		$newModel->param3 = Input::get('param3');
		$newModel->left = Input::get('left');
		$newModel->image  = Input::get('image');
	    $newModel->save();	
	    return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /sliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$model = Slider::find($id);
		$this->layout->content = View::make('sliders.show')->with(array('model'=> $model ));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sliders/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = Slider::find($id);		
		$this->layout->content = View::make('sliders.edit')->with(array('model'=> $model ));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$newModel = Slider::find($id);
		$newModel->enable = Input::get('enable');
		$newModel->param1 = Input::get('param1');
		$newModel->param2 = Input::get('param2');
		$newModel->param3 = Input::get('param3');
		$newModel->left = Input::get('left');
		$newModel->image = Input::get('image');
		$newModel->save();
		return Redirect::to('admin/sliders')
		->with('message', Lang::get('persian.update-slider-success', array(), 'fa'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$model = Slider::find($id);
		$model->delete();
		return Redirect::back();
	}


	public function getChangestate($id)
	{
		$model = Slider::find($id);
		if($model->enable == 0)
			$model->enable = 1;
		else

			$model->enable = 0;

		$model->save();
		return Redirect::back();			
	}

	public function getGoup($id)
	{
		$model = Slider::find($id);
		$priority = $model->priority;

		if($priority != 1){
			$model2 = Slider::where('priority' , '=' , $priority-1)->firstOrFail();
			$model->priority--;
			$model2->priority++;
			$model->save();
			$model2->save();
		}
		return Redirect::back();				
	}


	public function getGodown($id)
	{
		$model = Slider::find($id);
		$priority = $model->priority;
		$max = DB::table('sliders')->max('priority');

		$newPriority = $priority+1;
		if($priority != $max){
			$model2 = Slider::where('priority' , '=' , $newPriority )->firstOrFail();
			$model->priority++;
			$model2->priority--;
			$model->save();
			$model2->save();
		}
		return Redirect::back();				
	}


	public function setting()
	{
		if($setting = $slider_settings = DB::table('slider-settings')->first());
		else
		{
			$setting = new stdClass();
			$setting->speed = 4000;
			$setting->stophover = 'on';
			$setting->textanim = 'easeOutExpo'; 
		}
		$this->layout->content = View::make('sliders.setting')->with(array('setting'=>$setting));		
	}

	public function settingpost()
	{
		if(! $slider_settings = DB::table('slider-settings')->first()){
			DB::table('slider-settings')->insert(
	    		array('speed' => Input::get('speed'),
	    			  'stophover'=>Input::get('stophover'),
	    			  'textanim'=>Input::get('textanim')
	    			  )
				);
		}

		else
		{
			DB::table('slider-settings')
		        ->where('id', 1)
		        ->update(array('speed' => Input::get('speed'),
	    			  'stophover'=>Input::get('stophover'),
	    			  'textanim'=>Input::get('textanim')
	    			  ));
		}

		return Redirect::to('admin/sliders')
		->with('message', Lang::get('persian.update-slider-success', array(), 'fa'));		
	}
}