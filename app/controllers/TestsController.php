<?php
//require '../../kint/Kint.class.php';
class TestsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tests
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = File::get(base_path().'/app/routes.php');
		kint::dump($data);
		$start_pos = strpos($data, 'siteDisable');
		kint::dump($start_pos);
		$end_pos = strpos($data , '\'(.*)\');' , $start_pos);
		kint::dump($end_pos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tests/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tests
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tests/{id}
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
	 * GET /tests/{id}/edit
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
	 * PUT /tests/{id}
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
	 * DELETE /tests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}