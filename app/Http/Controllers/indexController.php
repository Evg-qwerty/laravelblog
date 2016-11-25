<?php

namespace App\Http\Controllers;

use App\Model\Content;
use App\Model\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class indexController extends Controller
{

	public function index(Content $postsModel, Menu $menuModel, Request $request)
	{
		$posts = $postsModel->getPublishedPost();
		$menus = $this->getParents( $menuModel->getMenu() );
		$url = $request->path();

		return view("index", ['posts' => $posts, 'menu' => $menus, 'url' => $url]);
	}

	public function getParents($menus)
	{
		$menusSort = [];

		for ($n=0; $n<=$menus[count($menus)-1]->order; $n++) {
			for ($i = 0; $i < count($menus); $i++) {
				if ($menus[$i]->order == $n && !isset($menus[$i]->parent_id)) {
					$menus[$i]->level = 1;
					$menusSort[] = $menus[$i];
				}
			}
			$node = last($menusSort);
			for ($i = 0; $i < count($menus); $i++) {
				if ($menus[$i]->parent_id == $node->id) {
					$menus[$i]->level = 2;
					$menusSort[] = $menus[$i];
				}
			}
		}
		//dd($menusSort);
		return $menus;
	}

	public function content(Content $postsModel, $url)
	{
		$post = $postsModel->getPost($url);
		return view("content", ['post' => $post]);
	}
}
