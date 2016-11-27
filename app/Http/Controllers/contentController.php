<?php

namespace App\Http\Controllers;

use App\Model\Content;
use Illuminate\Http\Request;

class contentController extends Controller
{
	public function catalog(Content $catalogModel, $category)
	{
		$param = [
			"limit" => false,
			"public" => false,
			"sort" => "created",
			"filter" => true,
			"filterColumn" => "catalog",
			"filterValue" => $category
		];

		$catalogData = $catalogModel->getPost($param);
		return view("section", ['catalog' => $catalogData]);
	}
}
