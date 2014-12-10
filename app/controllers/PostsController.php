<?php

class PostsController extends BaseController {

	public function __construct()
	{
		// call base controller constructor
		parent::__construct();

		// run auth filter before all methods on this controller except index and show.
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');
		$search = Input::get('search');

		if(!is_null($search)){
			$query->where('title', 'like', '%' . $search . '%')
				  ->orWhere('body', 'like', '%' . $search . '%');
		} 

		$posts = $query->orderBy('created_at', 'desc')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//create the validator
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$all_input = Input::all();
			$new_post = new Post();

			$new_post->title   = $all_input['title'];
			$new_post->body    = $all_input['body'];
			$new_post->user_id = Auth::id();
			$new_post->save();

			return Redirect::action('PostsController@show', $new_post->id);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);

		$post->title = Input::get('title');
		$post->body = Input::get('body');

		$post->save();

		return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action('PostsController@index');
	}
}
