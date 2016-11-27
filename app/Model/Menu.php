<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Menu extends Model
{
	protected $table = 'menus';
	protected $fillable = ['id', 'title', 'url', 'order', 'weight', 'parent_id', 'status', 'no_child', 'last'];

	public function getMenu()
	{
		$menus = DB::table('menus')
			->orderBy('order', 'asc')
			->where('status',1)
			->get();

		$menus = $this->sortMenu($menus);

		return $menus;
	}

	public function sortMenu($menus)
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
		return $menusSort;
	}
}
