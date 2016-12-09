<?php

namespace App\Http\Controllers;

use App\Model\Content;
use Illuminate\Http\Request;
use URL;

class contentController extends Controller
{
	public function article(Content $catalogModel, $url)
	{
		$param = [
			"limit" => 1,
			"public" => false,
			"sort" => "created",
			"filter" => true,
			"filterColumn" => "url",
			"filterValue" => $url
		];

		$catalogData = $catalogModel->getPost($param);
		return view("article", ['catalog' => $catalogData]);
	}

	public function about(Content $catalogModel)
	{
		$param = [
			"limit" => 1,
			"public" => false,
			"sort" => "created",
			"filter" => true,
			"filterColumn" => "catalog",
			"filterValue" => "about"
		];

		$catalogData = $catalogModel->getPost($param);
		return view("article", ['catalog' => $catalogData]);
	}



	public function category(Content $catalogModel, Request $request, $url)
	{
		$urlReal = $request->path();

		$param = [
			"limit" => false,
			"public" => false,
			"sort" => "created",
			"filter" => true,
			"filterColumn" => "catalog",
			"filterValue" => $url
		];

		$catalogData = $catalogModel->getPost($param);
		//dd(isset($catalogData->first()->id));
		//dd($catalogData);
		return view("category", ['catalog' => $catalogData]);
	}
}
