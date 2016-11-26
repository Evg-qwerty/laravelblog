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
		$menus = DB::table('menus')->orderBy('order', 'asc')->get();

		return $menus;
	}
}
