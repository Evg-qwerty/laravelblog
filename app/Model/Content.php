<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Content extends Model
{


	protected $table = 'blogmodels';
	protected $fillable = [
		'id',
		'title',
		'url',
		'img',
		'description',
		'content',
		'active',
		'created',
		'created_at',
		'updated_at',
	];

	public function getPublishedPost()
	{
		$posts = Content::latest('created')->published()->get();
		//dd($posts);

		return $posts;
	}

	public function scopePublished ($query)
	{
		$query->where('created', '<=', Carbon::now() )->where('active', '=', 1)->Limit(6);
	}

	public function getPost($url)
	{
		$post = Content::latest('created')->where('url', '=', $url)->get();
		//dd($post);
		$post = $post->toArray();
		$post = (object)$post[0];
		return $post;
	}

}