<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Content extends Model
{


	protected $table = 'blogmodels';
	protected $fillable = ['id','title','url','img','description','content','autor'.'catalog','active','created','created_at','updated_at'];

	public function getPost($param)
	{
		$param = (object)$param;

		$posts = Content::latest($param->sort);

		if($param->public)
			$posts->published();

		if($param->filter)
			$posts->where($param->filterColumn, '=', $param->filterValue);

		if($param->limit)
			$posts = $posts->limit($param->limit);

		$posts = $posts->get();

		return $posts;
	}

	public function scopePublished ($query)
	{
		$query->where('created', '<=', Carbon::now() )->where('active', '=', 1);
	}
}
