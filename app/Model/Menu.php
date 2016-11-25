<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Menu extends Model
{
	protected $table = 'menus';
	protected $fillable = ['title', 'url', 'weight', 'parent', 'status'];

	public function getMenu()
	{
		$menus = DB::table('menus')->orderBy('order', 'asc')->get();
		//dd($menus);
		return $menus;
	}
}
