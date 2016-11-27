<?php

namespace App\Http\Controllers;

use App\Model\Content;
use Illuminate\Http\Request;

class indexController extends Controller
{

	public function index(Content $postsModel, Request $request)
	{
		$param = [
			"limit" => "6",
			"public" => false,
			"sort" => "created",
			"filter" => false,
			"filterColumn" => "false",
			"filterValue" => false
		];

		$posts = $postsModel->getPost($param);

		$url = $request->path();

		return view("index", ['posts' => $posts, 'url' => $url]);
	}


}
