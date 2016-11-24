<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menus';
	protected $fillable = ['title', 'url', 'weight', 'parent', 'status'];

	public function getMenu()
	{
		$menus = User::latest('created_at')->all()->get();
		dd($menus);
		return $menus;
	}
}
