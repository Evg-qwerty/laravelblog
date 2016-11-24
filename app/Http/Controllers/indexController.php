<?php

namespace App\Http\Controllers;

use App\Model\Content;
use Illuminate\Http\Request;

class indexController extends Controller
{
/*	public function __construct()
	{
			//$this->middleware('auth');
	}*/

	public function index(Content $postsModel)
	{
		$posts = $postsModel->getPublishedPost();
		return view("index", ['posts' => $posts]);
	}

	public function content(Content $postsModel, $url)
	{
		$post = $postsModel->getPost($url);
		dd($post);
		return view("content", ['post' => $post]);
	}
}