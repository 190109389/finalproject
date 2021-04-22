<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    public function index()
    {
    	return view('createPost');
    }

    public function store(Request $request)
{
	$validator = \Validator::make($request->all(), [
		'title' => 'required',
		'images' => 'required',
		'body' => 'required'
	])->validate();

	$post = new Post();
	$post->title = $request->title;
	$post->body = $request->body;
	$post->save();

	foreach ($request->file('images') as $image) {
		$postImage = new Image;
		$name = $image->getClientOriginalName();
		$path = public_path().'images/post/'.$post->id.'/'.$name;
		$image->move($path);
		$postImage->post_id = $post->id;
		$postImage->image_path = $path;
		$postImage->save();
	}

	return redirect()->back();
}
}
