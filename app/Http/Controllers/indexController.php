<?php

namespace App\Http\Controllers;

use App\Model\Content;

class indexController extends Controller
{

	public function index(Content $postsModel)
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

		return view("index", ['posts' => $posts]);
	}

}
