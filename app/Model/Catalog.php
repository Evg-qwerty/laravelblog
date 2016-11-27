<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Catalog extends Model
{
	protected $table = 'catalogs';
	protected $fillable = ['id','title','url','description','order','active','parent_id','created_at','updated_at'];

	// don't use
	public function getCatalog ($catalog) {
		$catalog = DB::table('catalogs')
			->orderBy('order', 'desc')
			->where('catalog',$catalog)
			->get();
		return $catalog;
	}
	public static function getList() {
		$catalog = DB::table('catalogs')->get();
		foreach ($catalog as $cat){
			$catalogList[$cat->url] = $cat->title;
		}
		return $catalogList;
	}
}
